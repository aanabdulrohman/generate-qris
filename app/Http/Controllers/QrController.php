<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrController extends Controller
{
    public function generate()
    {
        $qrString = "00020101021226740022ID.CO.POSINDONESIA.WWW01189360816100000000010215ID10210777318470303UMI520454995303360540115502015802ID5913CHICKEN_POPOP6008KARAWANG61054135662600703A010111227565836589934010110214202602121353160302010401263040751";

        // Hasilkan QR code (base64 image)
        $qrImage = base64_encode(QrCode::format('png')->size(300)->generate($qrString));

        return view('qris', compact('qrImage', 'qrString'));
    }
}
