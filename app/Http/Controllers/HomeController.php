<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $messages[] = 'Home Controller Index is working';
        $messages[] = self::getMemoryUsage();

        $collection = self::generateCollection();
        $fileName = 'export-' . time() . '.xlsx';

        $messages[] = self::getMemoryUsage();

        return response()->json([
            'response' => 'success',
            'messages' => $messages,
        ]);
    }

    private static function generateCollection($numOfRows = 100000, $numOfColumns = 20)
    {
        $collection = collect();
        for ($row = 1; $row <= $numOfRows; $row++) {
            $item = [];
            for ($col = 1; $col <= $numOfColumns; $col++) {
                $item['Column ' . $col] = 'Row ' . $row;
            }
            $collection->push($item);
        }

        return $collection;
    }

    private static function getMemoryUsage()
    {
        return number_format(round(memory_get_usage(true) / 1024,2)) . ' kB';
    }
}