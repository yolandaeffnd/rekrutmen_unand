<?php

use Carbon\Carbon;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

function z_enkripsi($string)
{
    $val = Crypt::encryptString($string);

    return $val;
}

function z_dekripsi($string)
{
    try {
        $val = Crypt::decryptString($string);
    } catch (DecryptException $e) {
        abort(403);
    }

    return $val;
}

function z_alert($type, $message, $errors) //ex. z_alert('danger', 'data gagal disimpan', 'isi erorr in array or not array')
{
    echo '<div class="alert alert-' . $type . ' alert-block">' . ($message ? $message . '<br>' : '');

    $can_foreach = is_array($errors) || is_object($errors);
    if ($can_foreach) {
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
    } else {
        echo '<li>' . $errors . '</li>';
    }
    echo '</div>';
}

function tanggal($date)
{
    return Carbon::parse($date)->isoFormat('dddd, D MMMM Y, H:mm A');
}

function hari($date)
{
    return Carbon::parse($date)->isoFormat('dddd, D MMMM Y');
}

function jam($date)
{
    return Carbon::parse($date)->isoFormat('H:mm');
}

function datebinding()
{
    return Carbon::now()->timezone('Asia/Jakarta')->isoFormat('Y-MM-DD');
}

function z_footer()
{
    return Carbon::now()->timezone('Asia/Jakarta')->isoFormat('dddd, D MMMM Y, H:mm A');

    // $today = Carbon::now()->isoFormat('D MMMM Y');
    // // “28 November 2020”

    // $today = Carbon::now()->isoFormat('dddd, D MMMM Y');
    // // “Minggu, 28 November 2020”

    // $today = Carbon::now()->isoFormat('dddd, D MMM Y');
    // // “Minggu, 28 Nov 2020”

    // $registeredAt = $user->created_at->isoFormat('dddd, D MMMM Y');
    // // “Minggu, 28 November 2020”

    // $lastUpdated = $post->updated_at->diffForHumans();
    // // “2 hari yang lalu”
}


function slugify($text, string $divider = '-')
{
    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, $divider);

    // remove duplicate divider
    $text = preg_replace('~-+~', $divider, $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}

