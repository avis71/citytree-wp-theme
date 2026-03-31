<?php
/**
 * Template Name: Practical Ecology - Winter
 */
get_header(); ?>

<!-- Page navigation -->
<nav class="page-navigation">
  <div class="container">
    <a href="#overview">סקירה</a>
    <a href="#workshops">לוח הסדנאות</a>
    <a href="#investment">מחיר</a>
    <a href="#times">גלגל השנה</a>
    <a href="<?php echo home_url('/practical-ecology-summer/'); ?>">לסדרת הקיץ</a>
  </div>
</nav>

<!-- Top Banner -->
<section class="hero-section" style="min-height:350px;padding:0;">
  <img src="<?php echo ct_asset('images/practical-ecology-winter/WinterMagic_upperBanner_01.png'); ?>" class="hero-bg" alt="">
  <div class="container" style="padding:60px 15px;">
    <h1 style="color:white;text-shadow:0 1px 4px rgba(0,0,0,0.5);">סדרת סדנאות השיבה הביתה</h1>
    <h2 style="color:white;text-shadow:0 1px 4px rgba(0,0,0,0.5);">18 שיעורי זום באקולוגיה מעשית, חורף 2020</h2>
  </div>
</section>

<!-- Overview -->
<div class="anchor-wrapper"><div class="scroll-anchor" id="overview"></div></div>
<section style="padding:50px 0;background:var(--color8);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-7 col-md-10">
        <div class="box-inner">
          <div class="box-title">ברוכות השבות הביתה!</div>
          <p>
            שינוי עולם מבקש שינוי תודעה והרגלים. בסדנאות של עץבעיר אנחנו מגלות את ההזדמנות האדירה שיש
            לנו ביומיום, בכל פעולה, ליצור שינוי ולתרגל אותו. כל סדנה היא מסע סביב הרגל, כל סדנה היא
            צעד. אנו חושפות אט אט את המחשבות המוטמעות בנו, מגלות איזו מערכת אמונות הן מייצגות, מבחינות
            מה הפעולות הקטנות שלנו משרתות ולומדות את הפרקטיקה של השינוי הקטן האחד שלו מוקדשת כל סדנה.
          </p>
          <p>משיעור לשיעור, מתרווחות בסיפוק שבהתאמה-מחדש לחוקיה של טבע - חוזרות הביתה.</p>
          <p>
            לאורך חורף 2020, בצל הקורונה, נפגשנו אחת לשבוע בזום, ל-18 שיעורים, כל פעם בנושא אחר בעולם
            הקיימות המעשית של עץבעיר - כיסינו אותו מהתיאוריה ועד הפרקטיקה, בליווי במצגת מרהיבה,
            ובהנחייה הרדיקלית של תמי צרי.
          </p>
          <p><strong>השיעורים הוקלטו וכעת ניתן לרכוש את ההקלטות</strong></p>
          <p>מחיר שיעור בודד: 20 ₪</p>
          <p>מחיר סדרת השיעורים כולה, 18 הקלטות: 150 ₪</p>
          <br>
          <a href="http://bit.ly/FormMagicLink" class="box-button" target="_blank">לרכישת הקלטות סדנאות החורף</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Workshops -->
<div class="anchor-wrapper"><div class="scroll-anchor" id="workshops"></div></div>
<section style="padding:50px 0;background:var(--color6);">
  <div class="container">
    <div class="box-title text-center mb-3">רשימת סדנאות החורף לבחירתכן</div>
    <p class="text-center mb-4">18 סדנאות ליוו אותנו לאורך שלושה זמנים בהתאמה לגלגל השנה של עץבעיר:</p>

    <ul class="nav nav-tabs justify-content-center mb-3" id="winterTabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="prosperity-tab" data-toggle="tab" href="#prosperity" role="tab">שגשגנות</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="agriculture-tab" data-toggle="tab" href="#agriculture" role="tab">חקלאות</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="cultivation-tab" data-toggle="tab" href="#cultivation" role="tab">הזנה</a>
      </li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane fade show active" id="prosperity" role="tabpanel">
        <div class="box-inner">
          <p><strong>עונה:</strong> סתיו | <strong>יסוד:</strong> אדמה | <strong>תאריכים:</strong> נובמבר–דצמבר 2020</p>
          <table class="table">
            <tbody>
              <tr><td>1</td><td>קומפוסט והעיר הגדולה – מבוא</td><td>10.11.20</td></tr>
              <tr><td>2</td><td>איך להיות חולה - שיקויי מרפא ועוד</td><td>17.11.20</td></tr>
              <tr><td>3</td><td>ארוחת הצהריים החורפית - איך מכינות צהריים בעץ</td><td>24.11.20</td></tr>
              <tr><td>4</td><td>חומץ והחיים בסתיו - איך עושות חומץ</td><td>1.12.20</td></tr>
              <tr><td>5</td><td>אש המרד - הכנת נרות אקולוגיים, סדנה לחנוכה</td><td>8.12.20</td></tr>
              <tr><td>6</td><td>קמבוצ'ה והחיידקים - איך מכינות קמבוצ'ה</td><td>15.12.20</td></tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="tab-pane fade" id="agriculture" role="tabpanel">
        <div class="box-inner">
          <p><strong>עונה:</strong> חורף | <strong>יסוד:</strong> אדמה | <strong>תאריכים:</strong> דצמבר 2020 – פברואר 2021</p>
          <table class="table">
            <tbody>
              <tr><td>7</td><td>צמחים מועילים בחורף בעיר - כובע נזיר, אפונה וברוקולי</td><td>22.12.20</td></tr>
              <tr><td>8</td><td>קומפוסט והעיר הגדולה – בוקאשי</td><td>29.12.20</td></tr>
              <tr><td>9</td><td>טקס התה המקומי - תה מהגינה בעיר</td><td>12.1.21</td></tr>
              <tr><td>10</td><td>שירת העשבים - ליקוט ומיצוי חלמתיים, סירפדיים ומרורים</td><td>19.1.21</td></tr>
              <tr><td>11</td><td>עצים לאור ירח - סדנה לט״ו בשבט, אלון ותמי</td><td>26.1.21</td></tr>
              <tr><td>12</td><td>הפרידה מהנייר החד פעמי</td><td>2.2.21</td></tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="tab-pane fade" id="cultivation" role="tabpanel">
        <div class="box-inner">
          <p><strong>עונה:</strong> חורף | <strong>יסוד:</strong> אוויר | <strong>תאריכים:</strong> פברואר–מרץ 2021</p>
          <table class="table">
            <tbody>
              <tr><td>13</td><td>תסססס... סדנת תרסיסים</td><td>9.2.21</td></tr>
              <tr><td>14</td><td>מה את עושה כשאת קמה בבוקר</td><td>16.2.21</td></tr>
              <tr><td>15</td><td>השיער המבריק - הזנה אמתית לשיער</td><td>23.2.21</td></tr>
              <tr><td>16</td><td>מתוק לי מתוק לי - סדנת תופינים לפורים</td><td>2.3.21</td></tr>
              <tr><td>17</td><td>סוף עונת התפוזים - מה עושות עם כל הקליפות</td><td>9.3.21</td></tr>
              <tr><td>18</td><td>ידידות עם החמה - הכנת חמאת הגנה מהחמה</td><td>16.3.21</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Investment -->
<div class="anchor-wrapper"><div class="scroll-anchor" id="investment"></div></div>
<section style="padding:50px 0;background:var(--color8);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="box-title text-center mb-3">רכישת הקלטות סדנאות החורף</div>
        <p>
          מלאו את טופס הרכישה ונישלח אליכם את הקישוריות לסדנאות בודדות, או לסדרה כולה, על פי בחירתכן.
          כמו תמיד, פטרוניות ופטרונים יכולים לשלם פחות, כמו גם מי שמתקשה כלכלית - כל האפשרויות בטופס.
        </p>
        <div class="row text-center mt-4">
          <div class="col-md-4 mb-3">
            <div class="box-inner">
              <div class="box-title">מחיר להקלטת סדנה בודדת</div>
              <div style="font-size:2rem;font-weight:bold;">20 ₪</div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="box-inner">
              <div class="box-title">מחיר להקלטות סדרת החורף כולה</div>
              <div style="font-size:2rem;font-weight:bold;">150 ₪</div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="box-inner">
              <div class="box-title"><strong>מחיר מיוחד לפטרונים</strong><div style="font-size:0.8em;">* למחבקות של העץ בפטראון</div></div>
              <div style="font-size:2rem;font-weight:bold;">100 ₪</div>
            </div>
          </div>
        </div>
        <div class="text-center mt-3">
          <a href="http://bit.ly/FormMagicLink" class="box-button" target="_blank">לרכישת הקלטות סדנאות החורף</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Times / Year Wheel -->
<div class="anchor-wrapper"><div class="scroll-anchor" id="times"></div></div>
<section style="padding:50px 0;background:var(--color1);">
  <div class="container text-center">
    <div class="box-title mb-3">גלגל השנה של עץבעיר</div>
    <img src="<?php echo ct_asset('images/practical-ecology-winter/WinterMagic_YearWheel_02.png'); ?>" alt="גלגל השנה" style="max-width:100%;border-radius:8px;">
  </div>
</section>

<!-- Link to Summer -->
<section style="padding:40px 0;background:var(--color6);text-align:center;">
  <div class="container">
    <div class="box-inner" style="display:inline-block;padding:20px 40px;">
      <div class="box-title">לסדרת הקיץ</div>
      <a href="<?php echo home_url('/practical-ecology-summer/'); ?>" class="box-button">לסדנאות הקיץ של עץבעיר</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
