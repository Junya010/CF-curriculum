/*
 課題：
    - 以下のコメントに従いコードを記述してください！
    - 課題が出来次第、保存して、このファイルを提出してください。
    dockerのlesoon5-phpコンテナを起動　→　DBeaver　実行して結果を確認

  1つでも評価が3以下の本のタイトル(BOOKテーブルのtitleカラム)を取得するSQLを以下に書いてください。
  ただし、重複は許さないものとします。
  (同じ内容のレコードが2つ以上表示されてはいけない)

  (取得結果イメージ)
  +----------------------------------+
  |              title               |
  +----------------------------------+
  |    ブレイブ・ニュー・ワールド　　　 |
  +----------------------------------+
*/

SELECT Title FROM Books RIGHT JOIN Reviews on ID = BookID WHERE Score <=3;