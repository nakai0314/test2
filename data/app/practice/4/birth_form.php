<html>
<body>
    <h1>生年月日を入力するフォームを作ろう</h1>
    <label for="year">西暦</label>
    <select name="year">
    <?php
    $now = date("Y");
    ?>
    </select>年
    <br>
    <select name="month">
    <option value="1">1</option>
    <option value="2">2</option>
    </select>月
    <select name="day">
    <option value="1">1</option>
    <option value="2">2</option>
    </select>日
</body>
</html>