<h1>スキルシート</h1>
<table class="user_table">
  <tr><th>名前</th><th>フリガナ</th><th>年齢</th><th>性別</th><th>最寄り駅</th><th>最終学歴</th></tr>
  <tr>
    <td><input type="text" size="5" maxlength="10" name="user_name" value="" class="memberList"></td>
    <td><input type="text" size="30" maxlength="30" name="kana" value="" class="memberList"></td>
    <td><input type="text" size="5" maxlength="10" name="age" value="" class="memberList"></td>
    <td>

    <input type="radio" name="gender" value="male">男
    <input type="radio" name="gender" value="female">女aaaaaaaaaaaa

    <td><input type="text" size="5" maxlength="10" name="nearest_station" value="" class="memberList"></td>
    <td><input type="text" size="30" maxlength="30" name="final_education" value="" class="memberList"></td>
    </td>
</tr>

    <!-- ここで、$articles クエリーオブジェクトを繰り返して、記事の情報を出力します -->

    <?php foreach ($users as $user): ?>
<!-- 1列目 -->

    <?php endforeach; ?>
    <?php echo $this->Form->button(__('Save User')); ?>
</table>