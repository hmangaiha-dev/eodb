<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Utils\AttachmentUtils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function upload(Request $request)
    {
        $attachments = [];
        foreach ($request->file() as $key => $file) {
            $attachmentProfile = AttachmentUtils::getAttachment($key);
            if (!blank($attachmentProfile)) {
                $disk = $attachmentProfile['disk'];
                $folder = $attachmentProfile['folder'];
                $path = Storage::disk($disk)->put($folder, $file);
                $attachment=Attachment::query()->create([
                    'original_name' => $file->getClientOriginalName(),
                    'mime' => $file->getMimeType(),
                    'label' => $attachmentProfile['label'],
                    'size' => $file->getSize(),
                    'path' => $path
                ]);
                array_push($attachments, $attachment);
            }
        }
        return [
            'list' => $attachments,
            'message' => 'Attachment uploaded successfully'
        ];

    }
}
