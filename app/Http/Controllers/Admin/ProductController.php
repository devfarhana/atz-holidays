<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductFeature;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $productFeatures = ProductFeature::all();
        return view('admin.product.index',compact('products','productFeatures'));
    }

    public function create()
    {
        $brands = Brand::where('status', 1)->get();
        $categories = Category::where('status', 1)->get();
        return view('admin.product.create',compact('brands','categories'));
    }


    private function handleFileUpload($file, $path)
    {
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
        return $file->storeAs('uploads/' . $path, $fileName, 'public');
    }

    private function handleFileDelete($filePath)
    {
        if ($filePath && Storage::exists('public/' . $filePath)) {
            Storage::delete('public/' . $filePath);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'model' => 'nullable|string|max:255',
            'capacity' => 'nullable|string|max:255',
            'brand_id' => 'required|integer|exists:brands,id',
            'category_id' => 'required|integer|exists:categories,id',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        $product = new Product();
        $product->name = $request->name;
        $slug = Str::slug($request->name);
        $product->slug = $slug;
        $product->model = $request->model;
        $product->capacity = $request->capacity;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->description = $request->description;

        if ($request->hasFile('image')) {
            $product->image = $this->handleFileUpload($request->file('image'), 'product/images');
        }
        $product->save();

        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }


    public function edit($id)
    {
        $brands = Brand::where('status', 1)->get();
        $categories = Category::where('status', 1)->get();
        $product = Product::findOrFail($id);
        return view('admin.product.edit',[
            'brands' => $brands,
            'categories' => $categories,
            'product' => $product,

        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'model' => 'nullable|string|max:255',
            'capacity' => 'nullable|string|max:255',
            'brand_id' => 'required|integer|exists:brands,id',
            'category_id' => 'required|integer|exists:categories,id',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $slug = Str::slug($request->name);
        $product->slug = $slug;
        $product->model = $request->model;
        $product->capacity = $request->capacity;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->description = $request->description;

        // Handle Image Upload
        if ($request->hasFile('image')) {
            // Delete old image
            $this->handleFileDelete($product->image);
            // Upload new image
            $product->image = $this->handleFileUpload($request->file('image'), 'product/images');
        }
        $product->save();

        return redirect()->route('product.index')->with('success', 'Product updated successfully.');
    }

    public function featureUpdate(Request $request, $id)
    {
        $request->validate([
            'feature_title.*' => 'nullable|string|max:255',
        ]);

        try {
            DB::beginTransaction();

            // Find product
            $product = Product::findOrFail($id);

            // Get existing features for this product
            $existingFeatureIds = $product->features()->pluck('id')->toArray();

            $updatedFeatureIds = []; // Store updated or new feature IDs

            if ($request->has('feature_title')) {
                foreach ($request->feature_title as $index => $featureTitle) {
                    $featureId = $request->feature_ids[$index] ?? null; // Get feature ID if provided

                    if ($featureId && in_array($featureId, $existingFeatureIds)) {
                        // Update existing feature
                        $feature = ProductFeature::findOrFail($featureId);
                        $feature->feature_title = $featureTitle;
                        $feature->save();
                        $updatedFeatureIds[] = $featureId; // Add to updated list
                    } elseif (!$featureId) {
                        // Add new feature
                        $feature = new ProductFeature();
                        $feature->feature_title = $featureTitle;
                        $feature->product_id = $product->id;
                        $feature->save();
                        $updatedFeatureIds[] = $feature->id; // Add to updated list
                    }
                }
            }

            // Remove features that were not updated (i.e., deleted by the user)
            $featuresToDelete = array_diff($existingFeatureIds, $updatedFeatureIds);
            if (!empty($featuresToDelete)) {
                ProductFeature::whereIn('id', $featuresToDelete)->delete();
            }

            DB::commit();
            return redirect()->back()->with('message', 'Features updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return back()->withErrors(['error' => 'An error occurred while updating the features. Please try again.']);
        }
    }


    public function toggleStatus($id)
    {
        $product = Product::findOrFail($id);
        $product->status = !$product->status;
        $product->save();
        return redirect()->route('product.index')->with('success', 'Product status updated successfully.');
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $productImages = ProductImage::where('product_id', $product->id)->get();

        if ($productImages->isNotEmpty()) {
            foreach ($productImages as $productImage) {
                $this->handleFileDelete($productImage->image);
                $productImage->delete();
            }
        }
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }

    public function destroyImage($id)
    {
        $productImage = ProductImage::findOrFail($id);
        $this->handleFileDelete($productImage->image);
        $productImage->delete();

        return redirect()->route('product.edit')->with('success', 'Product Image deleted successfully.');
    }


}
