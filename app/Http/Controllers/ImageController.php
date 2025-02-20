<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ImageController extends Controller
{
    //

    public function upload(Request $request)
    {
        $paths = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('temp', 'public'); // Store in storage/app/public/temp
                $paths[] = asset("storage/$path"); // Convert to public URL
            }
        }

        return response()->json(['success' => true, 'paths' => $paths]);
    }

    public function remove(Request $request)
    {
        $imagePath = str_replace(asset('storage/'), '', $request->imagePath); // Get relative path
        Storage::disk('public')->delete($imagePath); // Delete file

        return response()->json(['success' => true]);
    }
}
