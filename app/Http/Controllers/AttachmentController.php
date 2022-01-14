<?php

namespace App\Http\Controllers;

use App\Utils\AttachmentUtils;
use Illuminate\Http\Request;

class AttachmentController extends Controller
{
    public function getApplicationAttachments(Request $request)
    {
        $application_code = $request->get('application_code');

        $attachments = AttachmentUtils::getAttachmentsByApplicationCode($application_code);
        return response()
            ->json($attachments, 200);
    }
}
