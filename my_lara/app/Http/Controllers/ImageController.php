<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function updateImages(Request $request, $item_id)
    {
        $item = Item::findOrFail($item_id);

        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif',
        ], [
            'images.required' => 'Please select at least one image to upload.',
            'images.*.image' => 'Each file must be a valid image.',
            'images.*.mimes' => 'Images must be of type: jpeg, png, jpg, gif.',
            'images.*.max' => 'Each image must be under 2MB.',
        ]);

        foreach ($request->file('images') as $imageFile) {
            $imageName = uniqid() . '.' . $imageFile->getClientOriginalExtension();
            $imageFile->move(public_path('dataset_pics'), $imageName);

            Image::create([
                'item_id' => $item->item_id,
                'image_name' => $imageName,
            ]);
        }

        return back()->with('success', 'Images uploaded successfully.');
    }

    public function destroy($image_id)
    {
        $image = Image::findOrFail($image_id);
        $item = $image->item;

        if ($item->images()->count() <= 2) {
            return back()->withErrors(['delete' => 'At least 2 images must remain for this item.']);
        }

        // Delete the image file from storage
        $imagePath = public_path('dataset_pics/' . $image->image_name);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete from database
        $image->delete();

        return back()->with('success', 'Image deleted successfully.');
    }
}
