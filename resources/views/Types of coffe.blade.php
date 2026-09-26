<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قائمة القهوة المختصة</title>
    <style>
        /* إعدادات الصفحة الأساسية */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #1a1a2e;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .menu-container {
            text-align: center;
            max-width: 800px;
            padding: 20px;
        }
        h2 {
            color: #e94560; /* لون مميز للعنوان */
            font-size: 28px;
            margin-bottom: 40px;
            letter-spacing: 1px;
        }
        .items {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        /* تصميم البطاقات */
        .item-card {
            background: #16213e;
            border-radius: 20px;
            padding: 30px 20px;
            width: 200px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            transition: all 0.4s ease;
            border: 1px solid #0f3460;
        }
        
        /* تأثيرات الحركة عند تمرير الماوس */
        .item-card:hover {
            transform: translateY(-10px);
            border-color: #e94560;
            box-shadow: 0 15px 40px rgba(233, 69, 96, 0.25);
        }
        .icon {
            font-size: 50px;
            margin-bottom: 20px;
        }
        .item-card h3 {
            margin: 0 0 10px;
            font-size: 20px;
        }
        .item-card p {
            color: #a2a2bd;
            font-size: 13px;
            line-height: 1.6;
        }
        .price {
            display: inline-block;
            margin-top: 15px;
            padding: 8px 20px;
            background: #e94560;
            border-radius: 30px;
            font-weight: bold;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="menu-container">
        <h2>ركن القهوة المختصة ☕</h2>
        <div class="items">
            
            <!-- المنتج الأول -->
            <div class="item-card">
                <div class="icon">☕</div>
                <h3>اسبريسو</h3>
                <p>جرعة مكثفة من القهوة الغنية لمحبي المذاق القوي والأصيل.</p>
                <div class="price">25,000 ل.س</div>
            </div>

            <!-- المنتج الثاني -->
            <div class="item-card">
                <div class="icon">🥛</div>
                <h3>لاتيه</h3>
                <p>مزيج ناعم من الاسبريسو والحليب المبخر مع طبقة خفيفة من الرغوة.</p>
                <div class="price">35,000 ل.س</div>
            </div>

            <!-- المنتج الثالث -->
            <div class="item-card">
                <div class="icon">🧊</div>
                <h3>كولد برو</h3>
                <p>قهوة مقطرة ببطء بالماء البارد لمدة 12 ساعة لانتعاش لا مثيل له.</p>
                <div class="price">40,000 ل.س</div>
            </div>

        </div>
    </div>

</body>
</html>