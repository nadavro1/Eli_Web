

<div id="contact-form">
    <link href="CSS/FeedbackFormStyle.css" rel="stylesheet" />

    <div>
        <h1>נשמח לשמוע ממך!</h1>
        <h4>תנו לנו פידבק</h4>
    </div>
    <p id="failure">אירעה שגיאה</p>
    <p id="success">הודעתך נשלחה בהצלחה. תודה רבה!</p>

    <form method="post" action="/">
        <div>
            <label for="name">
                <span class="required">שם מלא: *</span>
                <input type="text" id="name" name="שם מלא" value="" placeholder="שם מלא" required="required" tabindex="1" autofocus="autofocus" />
            </label>
        </div>

        <div>
            <label for="email">
                <span class="required">המייל שלי: *</span>
                <input type="email" id="email" name="המייל שלי" value="" placeholder="המייל שלי" tabindex="2" required="required" />
            </label>
        </div>
        <div>

        </div>
        <div>
            <label for="message">
                <span class="required">רשמו כאן: *</span>
                <textarea id="message" name="תוכן ההודעה" placeholder="רשמו את הודעתכם כאן!" tabindex="5" required="required"></textarea>
            </label>
        </div>

        <div>
            <button name="submit" type="submit" id="submit">שלח!</button>
        </div>
    </form>

</div>