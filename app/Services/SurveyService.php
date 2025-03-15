<?php

namespace App\Services;

use App\Models\Jorip;

class SurveyService
{
    public function calculateSurvey($jorip)
    {
        $survey = $jorip->surveys; // Use the relationship to get surveys for the jorip

        // Count total surveys
        $totalSurveys = $survey->count();

        // Initialize counters for each opinion
        $opinionCounts = [
            1 => 0,
            2 => 0,
            3 => 0,
        ];

        $opinionTypeCounts = [
            1 => 0,
            2 => 0,
        ];

        // Count occurrences of each opinion
        foreach ($survey as $entry) {
            if (isset($opinionCounts[$entry->opinion])) {
                $opinionCounts[$entry->opinion]++;
            }
            if (isset($opinionTypeCounts[$entry->opinion_type])) {
                $opinionTypeCounts[$entry->opinion_type]++;
            }
        }

        // Calculate percentages
        $opinionPercentages = [];
        $opinionTypePercentages = [];
        foreach ($opinionCounts as $opinion => $count) {
            $opinionPercentages[$opinion] = $totalSurveys > 0 ? round(($count / $totalSurveys) * 100, 2) : 0;
        }

        foreach ($opinionTypeCounts as $opinion => $count) {
            $opinionTypePercentages[$opinion] = $totalSurveys > 0 ? round(($count / $totalSurveys) * 100, 2) : 0;
        }

        // Map opinion percentages to labels
        $opinionLabels = [
            1 => $jorip->button_1_name,
            2 => $jorip->button_2_name,
            3 => $jorip->button_3_name,
        ];

        $opinionTypeLabels = [
            1 => 'ব্যক্তি',
            2 => 'প্রতিষ্ঠান/সংস্থা',
        ];

        $result = [];
        foreach ($opinionPercentages as $opinion => $percentage) {
            $result[] = $opinionLabels[$opinion] . ' - ' . $percentage . '%';
        }

        $opinionTypeResult = [];
        foreach ($opinionTypePercentages as $opinion => $percentage) {
            $opinionTypeResult[] = $opinionTypeLabels[$opinion] . ' - ' . $percentage . '%';
        }

        return [
            'opinionTypeResult' => implode("<br>", $opinionTypeResult),
            'result' => implode("<br>", $result),
            'totalSurveys' => $totalSurveys,
        ];
    }

    public function calculateAllSurveys()
    {
        $jorips = Jorip::where('is_indexed', true)->with('surveys')->orderBy('id', 'desc')->get();
        $allResults = [];

        foreach ($jorips as $jorip) {
            $allResults[$jorip->id] = [
                'joripName' => $jorip->jorip_name,
                'joripTitle' => $jorip->jorip_title,
                'results' => $this->calculateSurvey($jorip),
            ];
        }
        // dd($allResults);
        return $allResults;
    }
}
