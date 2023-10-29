<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    //views

    // public function index()
    // {
    //     return view('users.progress', [
    //         "title" => "Progress"
    //     ]);
    // }

    public function profile()
    {
        $user = Auth::user(); // Mengambil data pengguna berdasarkan email yang terkait dengan pengguna yang saat ini masuk

        return view('users.profile', [
            "title" => "Profile Setting",
            'user' => $user // Mengirim data pengguna ke tampilan
        ]);
    }

    public function edit()
    {
        $user = Auth::user();

        return view('users.action.edit', [
            "title" => "Edit Profile",
            'user' => $user
        ]);
    }

    public function updateProfile(Request $request)
    {
        // Validate data
        $validator = Validator::make($request->all(), [
            'new_username' => 'required|string|max:255',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif', // Adjust the allowed file types and size as needed
        ], [
            'profile_image.image' => 'The profile image must be an image.',
            'profile_image.mimes' => 'The profile image must be a file of type: jpeg, png, jpg, gif.',
            'profile_image.max' => 'The profile image may not be greater than 2MB in size.',
        ]);

        if ($validator->fails()) {
            return redirect('/edit')
                ->withErrors($validator)
                ->withInput();
        }

        // Get the currently logged-in user
        $user = Auth::user();

        // Update username with the new data from the form
        $user->username = $request->input('new_username');

        // Handle image upload
        if ($request->hasFile('profile_image')) {
            // Store the uploaded image and get its path
            $imagePath = $request->file('profile_image')->store('profile_images', 'public');

            // Save the image path to the user's profile
            $user->profile_image = $imagePath;
        }

        // Save changes to the database
        $user->save();

        // Redirect to the profile page with a success message
        return redirect('/profile')->with('success', 'Profile updated successfully.');
    }

    public function deleteProfileImage()
    {
        // Get the currently logged-in user
        $user = Auth::user();

        // Delete the user's profile image from storage if it exists
        if ($user->profile_image) {
            Storage::disk('public')->delete($user->profile_image);
            $user->profile_image = null; // Set the profile image field to null in the database
            $user->save(); // Save the changes to the database
        }

        // Redirect back to the edit profile page or any desired page after image deletion
        return redirect('/edit')->with('success', 'Gambar profil berhasil dihapus.');
    }
}
