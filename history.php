<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Mali&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>ประวัติ</title>
    
</head>
<body style="margin: 10px 20px 20px 10px; background-color: #F8F8FF;">
        <h1 style="font-size: 50px; font-weight: bold; margin-top: 50px; font-family: 'Mali', cursive; text-align: center;">ประวัติ</h1>
 

    <br>
    <div class="form" style="width: 100%; padding: 10px; border-radius: 6px; background: #FFFFFF; box-shadow: 0 0 8px black; ">
        <table class="table" style="font-family: 'Mali', cursive; text-align: center;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>อายุ</th>
                    <th>เพศ</th>
                    <th>เม็ดเลือดแดงหรือฮีโมโกลบินมีการลดลงจากปกติหรือไม่?</th>
                    <th>ระดับของเอนไซม์ CPK ในเลือด (mcg/L)</th>
                    <th>เป็นโรคเบาหวานหรือไม่?</th>
                    <th>เปอร์เซ็นต์ของเลือดที่ออกจากหัวใจในแต่ละครั้งเมื่อมีการบีบตัว (%)</th>
                    <th>เป็นโรคความดันโลหิตสูงหรือไม่?</th>
                    <th>ปริมาณเกล็ดเลือดในเลือด (kiloplatelets/mL)</th>
                    <th>ระดับของ creatinine ที่อยู่ในเลือด (mg/dL)</th>
                    <th>ระดับของโซเดียมที่อยู่ในเลือด (mEq/L)</th>
                    <th>สูบบุหรี่หรือไม่?</th>
                    <th>ผลลัพธ์</th>
                </tr>
            </thead>
        <?php for($i=0;$i<sizeof($his);$i++){ ?>
            <?php if($i==sizeof($his)-1){break;}?>
            <tbody>
            <tr>
                    <td><?php echo $i+1?></td>
                    <?php for($j=0;$j<sizeof($his[$i]);$j++){ ?>
                    <td><?php echo $his[$i][$j]?></td>
                    <?php } ?>
            </tr>

            </tbody>
        <?php }?>
        </table>
    </div>
    <br>
    <br>

    <div style="text-align: center; margin-bottom: 50px;">
        <a href="home.html"><button type="button" class="btn btn-secondary" style="font-family: 'Mali', cursive; border: none; border-radius: 5px; font-size: 16px; width: 150px; padding: 10px;">ย้อนกลับ</button></a>
    </div>

</body>
</html>

 <!-- <tr style="font-size: 13px;">
                    <td>1</td>
                    <td>ฟ้าใส</td>
                    <td>สวยจัง</td>
                    <td>20</td>
                    <td>หญิง</td>
                    <td>ไม่มีเลย</td>
                    <td>เป็นบางวัน</td>
                    <td>เป็นบ่อย</td>
                    <td>เป็นทุกวัน</td>
                    <td>ไม่มีเลย</td>
                    <td>เป็นบางวัน</td>
                    <td>เป็นบางวัน</td>
                    <td>เป็นทุกวัน</td>
                    <td>เป็นทุกวัน</td>
                    <td>มีอาการของโรคซึมเศร้า <br> ระดับปานกลาง</td>
                </tr>
                <tr style="font-size: 13px;">
                    <td>2</td>
                    <td>หนุ่ยตี้</td>
                    <td>ไม่อาบน้ำ</td>
                    <td>18</td>
                    <td>ชาย</td>
                    <td>ไม่มีเลย</td>
                    <td>เป็นบางวัน</td>
                    <td>ไม่มีเลย</td>
                    <td>เป็นทุกวัน</td>
                    <td>ไม่มีเลย</td>
                    <td>เป็นบางวัน</td>
                    <td>ไม่มีเลย</td>
                    <td>ไม่มีเลย</td>
                    <td>ไม่มีเลย</td>
                    <td>ไม่มีอาการของโรคซึมเศร้า <br> หรือมีอาการของโรคซึมเศร้า <br> ระดับน้อยมาก</td>
                </tr> -->