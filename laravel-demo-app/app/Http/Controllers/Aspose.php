<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Aspose\Slides\Cloud\Sdk\Model\ExportFormat;

class Aspose extends Controller
{
    public function index()
    {
        $info = self::getCloudApi()->getApiInfo();
        return view(
            "welcome",
            ["name" => $info->getName(), "version" => $info->getVersion(), "formats" => ExportFormat::getAllowableEnumValues() ]);
    }

    public function convert(Request $request)
    {
        $originalFileName = $request->file->getClientOriginalName();
        $fileName = time() . '_' . $originalFileName;
        $upload = $request->file('file')->storeAs('uploads', $fileName);
        $path = storage_path("app/" . $upload);
        $result = self::getCloudApi()->convert(fopen($path, 'r'), $request->format);
        unlink($path);

        $extension = strtolower($request->format);
        if ($extension == "html5") $extension = "html";
        else if ($extension == "png" || $extension == "jpeg" || $extension == "bmp" || $extension == "svg") $extension = "zip";

        $outputName = pathinfo($originalFileName)["filename"] . "." . $extension;
        return response()->download($result->getPathname(), $outputName);
    }
}
