<?php session_start();
//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';?>
<form action="RegAppData.php" method="post">

    <link href="css/RegisteredAppointmentStyle.css" rel="stylesheet" />

    <header>

        <h2 dir="rtl">קביעת תור- לקוח רשום</h2>
        <h3 dir="rtl">כיף שחזרתם אלינו!</h3>

    </header>


    
        <div dir="rtl">
            <div>
                <label> שמי המלא:</label>
            </div>
            <div dir="rtl">
                <input type="text" value="<?php echo $_SESSION['first_name']." ".$_SESSION['last_name'] ?>" name="regname">
            </div>
        </div>

    <div dir="rtl">
        <div>
        <label>
            המייל שלי:
        </label>
        </div>
        <div dir="rtl">
            <input type="text" readonly  value="<?php echo $_SESSION['user_name'] ?>" name="regmail">
        </div>
    </div>

    <div dir="rtl">
        <div>
        <label> מס' הפלאפון שלי:</label>
        </div>
        <div dir="rtl">
            <input type="text"  value="<?php echo $_SESSION['phone'] ?>" name="regphone"  >
        </div>
    </div>

    <div dir="rtl">
        <div>
        <label>
            ההערות שלי:
        </label>
        </div>
        <div dir="rtl">
            <textarea rows="10" cols="50" tabindex="4" name="comment"></textarea>
        </div>
    </div>
    <div dir="rtl">
        <div>
        <label >
            אנא בחר/י סוג טיפול:
        </label>
        </div>
    </div>
    <div dir="rtl">
        <fieldset dir="rtl">
            <div >
                <div dir="rtl">
                    <input  type="radio" name="haircut_type" value="תספורת גברים" tabindex="5" checked="checked">
                    <label ><b>תספורת גברים</b></label>
                </div>
                <div dir="rtl">
                    <input  type="radio" name="haircut_type" value="תספורת נשים" tabindex="6">
                    <label ><b>תספורת נשים</b></label>
                </div>
                <div dir="rtl">
                    <input  type="radio" name="haircut_type" value="צבע" tabindex="7">
                    <label ><b>צבע</b></label>
                </div>
            </div>
        </fieldset>
    </div>

    <div dir="rtl">
        <div>
        <label >
            בחר/י עובד/ת רצוי/ה:
        </label>
        </div>
    </div>
    <div dir="rtl">
        <div dir="rtl">
            <select name="barber"  tabindex="11">
                <option value="אסתי">אסתי</option>
                <option value="אלי">אלי</option>
                <option value="נדב">נדב</option>
                <option value="סהר">סהר></option>
            </select>
        </div>
    </div>

    <div dir="rtl">
        <div>
            <input id="saveForm" name="saveForm" type="submit" value="אישור!">
        </div>
    </div>

</form>
