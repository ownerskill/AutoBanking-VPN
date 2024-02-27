<?php
const CONFIG = [
    'DOMAINV2B' => "vpnfast.vn", //Tên miền web của bạn
    'TOKEN' => "xxx-xxx-xxx", // Token lấy lại https://api.vpnfast.vn  
    'KEYWORD' => "vpnf", // Nội dung chuyển khoảng KEYWORD (điền chữ thường không viết hoa, vì hệ thống sẽ tự hiển thị chữ hoa)
    'DATABASE' => [ // vào file .env của src web để xem thông tin TK, MK DB
        'HOST' => "localhost",
        'DBNAME' => "data" , // DB_DATABASE trong file.env
        'USERNAME' => "data", // DB_USERNAME trong file .env
        'PASSWORD' => "data", // DB_PASSWORD trong file .env
    ],
    'GATE' => [
        'CARD_DVS' => [
            'hookCard_DVS' => "xxx", //link hookcard mà dvsteam đã setup trước đó
            'WEBHOOK' => "xxx", // link (Địa Chỉ Thông Báo) trong web admin mục (Cấu Hình Thanh Toán)
            'KEY_CARD' => "Wlxxx", // bảo trì
            'CHIEUKHAU' => "2", // Chiếu Khấu Thẻ
            'CHAT_ID' => "5540480097" // lấy ID telegram tại https://t.me/getmyid_bot
            // Bấm Start bot https://t.me/apivpnfast_bot
        ]
    ],    
    'DVS_CHECKV2B' => '/www/wwwroot/vpnfast.vn/public/thanhtoan/ttt/',
];
