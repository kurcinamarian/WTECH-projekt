<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    // Store multiple images
    public function updateImages(Request $request, $itemId)
    {
        $request->validate([
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate the image files
        ]);

        // Find the item
        $item = Item::findOrFail($itemId);

        // Loop through the uploaded images and save each one
        foreach ($request->file('images') as $imageFile) {
            $imageName = time() . '-' . $imageFile->getClientOriginalName();

            // Save the image to the public folder
            $imageFile->move(public_path('dataset_pics'), $imageName);

            // Store image info in the database
            $image = new Image();
            $image->item_id = $item->item_id;
            $image->image_name = $imageName;
            $image->save();
        }

        return back()->with('success', 'Images uploaded successfully.');
    }

    // Delete a single image
    public function destroy($id)
    {
        $image = Image::findOrFail($id);

        // Delete the image file from disk
        $filePath = public_path('dataset_pics/' . $image->image_name);
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        // Delete the image from the database
        $image->delete();

        return back()->with('success', 'Image deleted successfully.');
    }
}
