<?php

use App\Http\Controllers\Admin\AboutKeypointController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\FrontEnd\IndexController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\FrontEnd\ContactController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\AdvertisementController;
use App\Http\Controllers\Admin\BannerImageController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\HajjPackageController;
use App\Http\Controllers\Admin\HajjPackageInfoController;
use App\Http\Controllers\Admin\HowItWorkController;
use App\Http\Controllers\Admin\NoticeTypeController;
use App\Http\Controllers\Admin\PackageTourController;
use App\Http\Controllers\Admin\PackageTourInfoController;
use App\Http\Controllers\Admin\PopularDestinationController;
use App\Http\Controllers\Admin\PrivacyPolicyController;
use App\Http\Controllers\Admin\TermsConditionController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\WhyBookController;
use App\Http\Controllers\FrontEnd\AboutUsController as FrontEndAboutUsController;
use App\Http\Controllers\FrontEnd\BlogController as FrontEndBlogController;
use App\Http\Controllers\FrontEnd\ExpertTeamController;
use App\Http\Controllers\FrontEnd\PackageController;

// Route::view('/', 'frontend.index');

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/privacy-policy', [IndexController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/terms-condition', [IndexController::class, 'termsCondition'])->name('termsCondition');
Route::get('/faq', [IndexController::class, 'faq'])->name('faq');
Route::get('/home/aboutus', [FrontEndAboutUsController::class, 'aboutUs'])->name('aboutus');
Route::get('/home/team', [ExpertTeamController::class, 'team'])->name('team');
Route::get('/home/blog', [FrontEndBlogController::class, 'blog'])->name('blog');
Route::get('/home/blog/details/{slug}', [FrontEndBlogController::class, 'blogDetails'])->name('blog.details');
Route::post('/home/blog/blog-comment/{slug}', [FrontEndBlogController::class, 'blogComment'])->name('blog-comment.store');
Route::post('/submit-contact-form', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/home/hajj-packages', [Packagecontroller::class, 'hajjPackage'])->name('hajjPackage');
Route::get('/home/hajj-package/details/{slug}', [Packagecontroller::class, 'HajjpackageDetails'])->name('HajjpackageDetails');
Route::get('/home/hajj-package/book-now/{slug}', [Packagecontroller::class, 'bookNow'])->name('bookNow');
Route::post('/home/hajj-package/book-now/{slug}/order', [Packagecontroller::class, 'order'])->name('order.submit');

Route::get('/home/package-tours', [Packagecontroller::class, 'packageTour'])->name('packageTour');
Route::get('/home/package-tour/details/{slug}', [Packagecontroller::class, 'PackagetourDetails'])->name('PackagetourDetails');
Route::get('/home/package-tour/book-now/{slug}', [Packagecontroller::class, 'packageBook'])->name('packageBook');
Route::post('/home/package-tour/book-now/{slug}/order', [Packagecontroller::class, 'packageorder'])->name('packageorder.submit');



Route::resource('/home/contact', ContactController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('/dashboard')->controller(SliderController::class)->group(function () {
        Route::get('/slider', 'index')->name('slider.index');
        Route::post('/slider/store', 'store')->name('slider.store');
        Route::get('/slider/toggle-status/{id}', 'toggleStatus')->name('slider.toggle-status');
        Route::put('/slider/update/{id}', 'update')->name('slider.update');
        Route::delete('/slider/destroy/{id}', 'destroy')->name('slider.destroy');
        Route::put('/slider/content/{id}', 'contentUpdate')->name('content.update');
    });


    Route::prefix('/dashboard')->controller(AdvertisementController::class)->group(function () {
        Route::get('/advertisement', 'index')->name('advertisement.index');
        Route::post('/advertisement/store', 'store')->name('advertisement.store');
        Route::get('/advertisement/toggle-status/{id}', 'toggleStatus')->name('advertisement.toggle-status');
        Route::put('/advertisement/update/{id}', 'update')->name('advertisement.update');
        Route::delete('/advertisement/destroy/{id}', 'destroy')->name('advertisement.destroy');
    });
    Route::prefix('/dashboard')->controller(PopularDestinationController::class)->group(function () {
        Route::get('/popular-destination', 'index')->name('popular-destination.index');
        Route::post('/popular-destination/store', 'store')->name('popular-destination.store');
        Route::post('/popular-destination/country/store', 'storeCountry')->name('popular-destination.country.store');
        Route::get('/popular-destination/toggle-status/{id}', 'toggleStatus')->name('popular-destination.toggle-status');
        Route::get('/popular-destination/country/toggle-status/{id}', 'toggleCountryStatus')->name('popular-destination.country.toggle-status');
        Route::put('/popular-destination/update/{id}', 'update')->name('popular-destination.update');
        Route::put('/popular-destination/country/update/{id}', 'updateCountry')->name('popular-destination.country.update');
        Route::delete('/popular-destination/destroy/{id}', 'destroy')->name('popular-destination.destroy');
        Route::delete('/popular-destination/country/destroy/{id}', 'destroyCountry')->name('popular-destination.country.destroy');

    });

    Route::prefix('/dashboard')->controller(AboutUsController::class)->group(function () {
        Route::get('/about-us', 'index')->name('about-us.index');
        Route::get('/about-us/edit/{id}', 'edit')->name('about-us.edit');
        Route::put('/about-us/update/{id}', 'update')->name('about-us.update');
    });
    Route::prefix('/dashboard')->controller(AboutKeypointController::class)->group(function () {
        Route::get('/aboutkeypoint', 'index')->name('aboutkeypoint.index');
        Route::post('/aboutkeypoint/store', 'store')->name('aboutkeypoint.store');
        Route::get('/aboutkeypoint/toggle-status/{id}', 'toggleStatus')->name('aboutkeypoint.toggle-status');
        Route::put('/aboutkeypoint/update/{id}', 'update')->name('aboutkeypoint.update');
        Route::delete('/aboutkeypoint/destroy/{id}', 'destroy')->name('aboutkeypoint.destroy');
    });
    Route::prefix('/dashboard')->controller(ClientController::class)->group(function () {
        Route::get('/client', 'index')->name('client.index');
        Route::post('client', 'store')->name('client.store');
        Route::get('/client/toggle-status/{id}', 'toggleStatus')->name('client.toggle-status');
        Route::get('/client/edit/{id}', 'edit')->name('client.edit');
        Route::put('/client/update/{id}', 'update')->name('client.update');
        Route::post('/client/show-url/{id}', 'showURL')->name('client.showURL');
        Route::delete('/client/destroy/{id}', 'destroy')->name('client.destroy');
        Route::put('/client/title-update/{id}', 'titleUpdate')->name('title.update');
    });
    Route::prefix('/dashboard')->controller(HowItWorkController::class)->group(function () {
        Route::get('/how-work', 'index')->name('how-work.index');
        Route::post('how-work', 'store')->name('how-work.store');
        Route::get('/how-work/toggle-status/{id}', 'toggleStatus')->name('how-work.toggle-status');
        Route::get('/how-work/edit/{id}', 'edit')->name('how-work.edit');
        Route::put('/how-work/update/{id}', 'update')->name('how-work.update');
        Route::delete('/how-work/destroy/{id}', 'destroy')->name('how-work.destroy');
        Route::put('/how-work/title-update/{id}', 'titleUpdate')->name('title.update');
    });

    Route::prefix('/dashboard')->controller(BlogController::class)->group(function () {
        Route::get('/blog', 'index')->name('blog.index');
        Route::post('/blog/store', 'store')->name('blog.store');
        Route::post('/blog/category/store', 'storeBlogCategory')->name('blog.category.store');
        Route::get('/blog/toggle-status/{id}', 'toggleStatus')->name('blog.toggle-status');
        Route::get('/blog/category/toggle-status/{id}', 'toggleBlogCategoryStatus')->name('blog.category.toggle-status');
        Route::put('/blog/update/{id}', 'update')->name('blog.update');
        Route::put('/blog/category/update/{id}', 'updateBlogCategory')->name('blog.category.update');
        Route::delete('/blog/destroy/{id}', 'destroy')->name('blog.destroy');
        Route::delete('/blog/category/destroy/{id}', 'destroyBlogCategory')->name('blog.category.destroy');

    });
    Route::prefix('/dashboard')->controller(TestimonialController::class)->group(function () {
        Route::get('/testimonial', 'index')->name('testimonial.index');
        Route::post('/testimonial/store', 'store')->name('testimonial.store');
        Route::get('/testimonial/toggle-status/{id}', 'toggleStatus')->name('testimonial.toggle-status');
        Route::put('/testimonial/update/{id}', 'update')->name('testimonial.update');
        Route::delete('/testimonial/destroy/{id}', 'destroy')->name('testimonial.destroy');

    });

    Route::prefix('/dashboard')->controller(HajjPackageController::class)->group(function () {
        Route::get('/hajj-package', 'index')->name('hajj-package.index');
        Route::get('/hajj-package/create', 'create')->name('hajj-package.create');
        Route::post('/hajj-package/store', 'store')->name('hajj-package.store');
        Route::get('/hajj-package/toggle-status/{id}', 'toggleStatus')->name('hajj-package.toggle-status');
        Route::get('/hajj-package/hotDeals/{id}', 'togglehotDeals')->name('hajj-package.toggle-hotDeals');
        Route::get('/hajj-package/edit/{id}', 'edit')->name('hajj-package.edit');
        Route::put('/hajj-package/update/{id}', 'update')->name('hajj-package.update');
        Route::put('/hajj-package/feature/{id}', 'featureUpdate')->name('hajj-feature.update');
        Route::delete('/hajj-package/destroy/{id}', 'destroy')->name('hajj-package.destroy');
        Route::post('/hajj-package/images', 'hajimagesStore')->name('hajjimages.store');
        Route::post('/hajj-package/images/{id}','imagesDestroy')->name('images.destroy');
        Route::get('/hajj-package/order', 'orderPackage')->name('orderPackage');
        Route::get('/hajj-package/order-details/{id}', 'orderDetails')->name('orderDetails');
    });
    Route::prefix('/dashboard')->controller(PackageTourController::class)->group(function () {
        Route::get('/package-tour', 'index')->name('package-tour.index');
        Route::get('/package-tour/create', 'create')->name('package-tour.create');
        Route::post('/package-tour/store', 'store')->name('package-tour.store');
        Route::get('/package-tour/toggle-status/{id}', 'toggleStatus')->name('package-tour.toggle-status');
        Route::get('/package-tour/hotDeals/{id}', 'togglehotDeals')->name('package-tour.toggle-hotDeals');
        Route::get('/package-tour/edit/{id}', 'edit')->name('package-tour.edit');
        Route::put('/package-tour/update/{id}', 'update')->name('package-tour.update');
        Route::post('/package-tour', 'imagesStore')->name('images.store');
        Route::post('/package-tour/images/{id}','imagesDestroy')->name('images.destroy');
        Route::put('/package-tour/feature/{id}', 'featureUpdate')->name('package-feature.update');
        Route::delete('/package-tour/destroy/{id}', 'destroy')->name('package-tour.destroy');
        Route::post('/package-tour/{id}/package-images', 'imagesStore')->name('package-tour-images.store');
        Route::get('/package-tour/order', 'packageOrder')->name('packageOrder');
        Route::get('/package-tour/order-details/{id}', 'packageOrderDetails')->name('packageOrderDetails');

    });

    Route::prefix('/dashboard/hajj-package/package-info')->controller(HajjPackageInfoController::class)->group(function () {

        Route::get('/{id}', 'info')->name('hajj-package.info');
        Route::put('/overview/update/{id}', 'overviewUpdate')->name('hajj-overview.update');
        // video
        Route::post('/video/{id}/video', 'videoStore')->name('hajj-video.store');
        Route::put('/video/{id}','videoUpdate')->name('hajj-video.update');
        Route::delete('/video/{id}', 'videoDestroy')->name('hajj-video.destroy');
        Route::get('/video/toggle-status/{id}', 'videoToggle')->name('hajj-video.toggle');
        //activity
        Route::post('/activity/{id}/activity', 'activityStore')->name('hajj-activity.store');
        Route::put('/activity/{id}','activityUpdate')->name('hajj-activity.update');
        Route::delete('/activity/{id}', 'activityDestroy')->name('hajj-activity.destroy');
        Route::get('/activity/toggle-status/{id}', 'activityToggle')->name('hajj-activity.toggle');
        //itinerary
        Route::post('/itinerary/{id}/itinerary', 'itineraryStore')->name('hajj-itinerary.store');
        Route::put('/itinerary/{id}','itineraryUpdate')->name('hajj-itinerary.update');
        Route::delete('/itinerary/{id}', 'itineraryDestroy')->name('hajj-itinerary.destroy');
        Route::get('/itinerary/toggle-status/{id}', 'itineraryToggle')->name('hajj-itinerary.toggle');
        //inclusion
        Route::post('/inclusion/{id}/inclusion', 'inclusionStore')->name('hajj-inclusion.store');
        Route::put('/inclusion/{id}','inclusionUpdate')->name('hajj-inclusion.update');
        Route::delete('/inclusion/{id}', 'inclusionDestroy')->name('hajj-inclusion.destroy');
        Route::get('/inclusion/toggle-status/{id}', 'inclusionToggle')->name('hajj-inclusion.toggle');
        //exclusion
        Route::post('/exclusion/{id}/exclusion', 'exclusionStore')->name('hajj-exclusion.store');
        Route::put('/exclusion/{id}','exclusionUpdate')->name('hajj-exclusion.update');
        Route::delete('/exclusion/{id}', 'exclusionDestroy')->name('hajj-exclusion.destroy');
        Route::get('/exclusion/toggle-status/{id}', 'exclusionToggle')->name('hajj-exclusion.toggle');
        //policy
        Route::post('/policy/{id}/policy', 'policyStore')->name('hajj-policy.store');
        Route::put('/policy/{id}','policyUpdate')->name('hajj-policy.update');
        Route::delete('/policy/{id}', 'policyDestroy')->name('hajj-policy.destroy');
        Route::get('/policy/toggle-status/{id}', 'policyToggle')->name('hajj-policy.toggle');
        //hotel
        Route::post('/hotel/{id}/hotel', 'hotelStore')->name('hotel.store');
        Route::put('/hotel/{id}','hotelUpdate')->name('hotel.update');
        Route::delete('/hotel/{id}', 'hotelDestroy')->name('hotel.destroy');
        Route::get('/hotel/toggle-status/{id}', 'hotelToggle')->name('hotel.toggle');


    });
    Route::prefix('/dashboard/package-tour/package-info')->controller(PackageTourInfoController::class)->group(function () {

        Route::get('/{id}', 'info')->name('package-tour.info');
        Route::put('//update/{id}', 'overviewUpdate')->name('overview.update');
        // video
        Route::post('/video/{id}/video', 'videoStore')->name('video.store');
        Route::put('/video/{id}','videoUpdate')->name('video.update');
        Route::delete('/video/{id}', 'videoDestroy')->name('video.destroy');
        Route::get('/video/toggle-status/{id}', 'videoToggle')->name('video.toggle');
        //activity
        Route::post('/activity/{id}/activity', 'activityStore')->name('activity.store');
        Route::put('/activity/{id}','activityUpdate')->name('activity.update');
        Route::delete('/activity/{id}', 'activityDestroy')->name('activity.destroy');
        Route::get('/activity/toggle-status/{id}', 'activityToggle')->name('activity.toggle');
        //itinerary
        Route::post('/itinerary/{id}/itinerary', 'itineraryStore')->name('itinerary.store');
        Route::put('/itinerary/{id}','itineraryUpdate')->name('itinerary.update');
        Route::delete('/itinerary/{id}', 'itineraryDestroy')->name('itinerary.destroy');
        Route::get('/itinerary/toggle-status/{id}', 'itineraryToggle')->name('itinerary.toggle');
        //inclusion
        Route::post('/inclusion/{id}/inclusion', 'inclusionStore')->name('inclusion.store');
        Route::put('/inclusion/{id}','inclusionUpdate')->name('inclusion.update');
        Route::delete('/inclusion/{id}', 'inclusionDestroy')->name('inclusion.destroy');
        Route::get('/inclusion/toggle-status/{id}', 'inclusionToggle')->name('inclusion.toggle');
        //exclusion
        Route::post('/exclusion/{id}/exclusion', 'exclusionStore')->name('exclusion.store');
        Route::put('/exclusion/{id}','exclusionUpdate')->name('exclusion.update');
        Route::delete('/exclusion/{id}', 'exclusionDestroy')->name('exclusion.destroy');
        Route::get('/exclusion/toggle-status/{id}', 'exclusionToggle')->name('exclusion.toggle');
        //policy
        Route::post('/policy/{id}/policy', 'policyStore')->name('policy.store');
        Route::put('/policy/{id}','policyUpdate')->name('policy.update');
        Route::delete('/policy/{id}', 'policyDestroy')->name('policy.destroy');
        Route::get('/policy/toggle-status/{id}', 'policyToggle')->name('policy.toggle');
         //hotel
         Route::post('/hotel/{id}/hotel', 'hotelStore')->name('packagehotel.store');
         Route::put('/hotel/{id}','hotelUpdate')->name('packagehotel.update');
         Route::delete('/hotel/{id}', 'hotelDestroy')->name('packagehotel.destroy');
         Route::get('/hotel/toggle-status/{id}', 'hotelToggle')->name('packagehotel.toggle');

    });



    Route::prefix('/dashboard')->controller(WhyBookController::class)->group(function () {
        Route::get('/why-book', 'index')->name('why-book.index');
        Route::post('/why-book/store', 'store')->name('why-book.store');
        Route::get('/why-book/toggle-status/{id}', 'toggleStatus')->name('why-book.toggle-status');
        Route::put('/why-book/update/{id}', 'update')->name('why-book.update');
        Route::delete('/why-book/destroy/{id}', 'destroy')->name('why-book.destroy');
    });
    Route::prefix('/dashboard')->controller(ContactUsController::class)->group(function () {
        Route::get('/contact-us', 'index')->name('contact-us.index');
        Route::put('/contact-us/update/{id}', 'update')->name('contact-us.update');
    });


    Route::resource('/dashboard/teams', TeamController::class);
    Route::get('/dashboard/teams/delete/{id}', [TeamController::class, 'destroy'])->name('team.destroy');
    Route::get('/dashboard/teams/toggle-status/{id}', [TeamController::class, 'toggleStatus'])->name('team.toggle-status');
    Route::put('//dashboard/teams/page-update/{id}', [TeamController::class, 'pageUpdate'])->name('team-page.update');

    Route::prefix('/dashboard')->controller(SettingController::class)->group(function () {
        Route::get('/setting', 'index')->name('setting.index');
        Route::put('/setting/update/{id}', 'update')->name('setting.update');
    });



    Route::resource('/dashboard/notice-type', NoticeTypeController::class);
    Route::get('/dashboard/notice-type/delete/{id}', [NoticeTypeController::class, 'destroy'])->name('notice-type.destroy');
    Route::get('/dashboard/notice-type/toggle-status/{id}', [NoticeTypeController::class, 'toggleStatus'])->name('notice-type.toggle-status');
});

Route::prefix('/dashboard')->controller(FaqController::class)->group(function () {
    Route::get('/faq', 'index')->name('faq.index');
    Route::post('/faq/store', 'store')->name('faq.store');
    Route::get('/faq/toggle-status/{id}', 'toggleStatus')->name('faq.toggle-status');
    Route::put('/faq/update/{id}', 'update')->name('faq.update');
    Route::delete('/faq/destroy/{id}', 'destroy')->name('faq.destroy');
});
Route::prefix('/dashboard')->controller(TermsConditionController::class)->group(function () {
    Route::get('/terms-condition', 'index')->name('terms-condition.index');
    Route::post('/terms-condition/store', 'store')->name('terms-condition.store');
    Route::get('/terms-condition/toggle-status/{id}', 'toggleStatus')->name('terms-condition.toggle-status');
    Route::put('/terms-condition/update/{id}', 'update')->name('terms-condition.update');
    Route::delete('/terms-condition/destroy/{id}', 'destroy')->name('terms-condition.destroy');
});
Route::prefix('/dashboard')->controller(PrivacyPolicyController::class)->group(function () {
    Route::get('/privacy-policy', 'index')->name('privacy-policy.index');
    Route::post('/privacy-policy/store', 'store')->name('privacy-policy.store');
    Route::get('/privacy-policy/toggle-status/{id}', 'toggleStatus')->name('privacy-policy.toggle-status');
    Route::put('/privacy-policy/update/{id}', 'update')->name('privacy-policy.update');
    Route::delete('/privacy-policy/destroy/{id}', 'destroy')->name('privacy-policy.destroy');
});
Route::prefix('/dashboard')->controller(BannerImageController::class)->group(function () {
    Route::get('/banner-image', 'edit')->name('banner-image.edit');
    Route::put('/banner-image/update/{id}', 'update')->name('banner-image.update');
});


Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return redirect()->back()->with('message', 'Storage link created successfully!');
});

Route::get('/optimize-clear', function () {
    Artisan::call('optimize:clear');
    return redirect()->back()->with('message', 'Optimization cache cleared successfully!');
});

require __DIR__ . '/auth.php';
