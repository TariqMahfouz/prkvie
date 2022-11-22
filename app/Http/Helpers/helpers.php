<?php

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

if(!function_exists('jsonResponse')) {
    function jsonResponse($code=200, $message='done', $data=[]) {
        $code = getCode($code);
        return response()->json([
            'status_code' => $code,
            'message' => $message,
            'data' => $data,
        ], $code);
    }
}


function getCode($code) {
    return ($code >= 100 && $code < 600) ? $code : 500;
}


if(!function_exists('uploadFile')) {
    function uploadFile($file, $path='uploads') {

        $destination = public_path().'/'.$path;
    
        $ext = $file->getClientOriginalExtension();
        
        $name = time().Str::random(5);
        
        $fileName = $name.'.'.$ext;
        
        $file->move($destination, $fileName);
        
        return $path.'/'.$fileName;
    }
}

if(!function_exists('getImagePath')) {
    function getImagePath($image) {
        return $image ? env('APP_URL').'/'.$image : '';
    }
}

if (!function_exists('resizeImage')) {
    function resizeImage($file, $path, $dimensions = [100, 100], $allSizes=false) {

        $destination = public_path($path);

        if (!file_exists($destination)) {
            // mkdir($destination, 777, true);
            mkdir($destination);
        }

        $ext = strtolower($file->getClientOriginalExtension());
        $name = time().Str::random(5);
        $fileName = "$dimensions[0]X$dimensions[1]$name.$ext";

        
        $img = Image::make($file->getRealPath());

        $img->resize($dimensions[0], $dimensions[1], function ($constraint) {
            $constraint->aspectRatio();
        })->save($destination.'/'.$fileName);

        return "$path/$fileName";
    }
}


if (!function_exists('imagesSizes')) {
    function imagesSizes() {
        return [
            [110, 110],
            [165, 165],
            [180, 180],
            [200, 200],
            [300, 300],
        ];
    }
}


if (!function_exists('FCMPush')) {
    function FCMPush($title, $body, $type, $token = null, $topic = null, $extra = [])
    {
        $fcmApiKey = env('FIREBASE_TOKEN');
        $url  = 'https://fcm.googleapis.com/fcm/send';
        $data = array(
            "title"             => $title,
            "body"              => $body,
            "type"              => $type,
            //"data"  => $extra,
            'content_available' => true,
            'vibrate'           => 1,
            'sound'             => true,
            'priority'          => 'high',
        );
        foreach ($extra as $key => $value) {
            $data[$key] = $value;
        }

        if ($topic != null) {
            $fields = array(
                'to'           => '/topics/' . $topic,
                'notification' => $data,
                'priority'     => 'high'
            );
        } else {
            $notification = array(
                'title'             => $title,
                'body'              => $body,
                'sound'             => 'default',
                'content_available' => true,
                'vibrate'           => 1,
                'sound'             => true,
                'badge'             => 1
            );
            $fields       = array(
                // 'registration_ids' => $token, # Like topic, it Sends To Multiple devices (Accept Array of device tokens)
                'to' => $token, # Send To only one device
                'notification'     => $notification,
                'data'             => ['click_action' => 'FLUTTER_NOTIFICATION_CLICK '],
            );
        }

        $headers = array(
            //'Authorization: key=' . env('FIREBASE_API_TOKEN'),
            'Authorization: key='.$fcmApiKey,
            'Content-Type:application/json'
        );
        //return $fields;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        if ($result === false) {
            die('cUrl faild: ' . curl_error($ch));
        }
        curl_close($ch);
        return $result;
    }
}

