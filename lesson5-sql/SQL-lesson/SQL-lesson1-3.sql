/*
    課題：
    - 以下のコメントに従いコードを記述してください！
    - 課題が出来次第、保存して、このファイルを提出してください。
    dockerのlesoon5-phpコンテナを起動　→　DBeaver　実行して結果を確認
*/


 /*
    1. Booksテーブルからtitleカラムが"ワンピース"のレコードを取得するSQL
    2. BooksテーブルからPublicationYearカラムが2023以下のレコードを取得するSQL
*/

SELECT * FROM Books WHERE title = 'ワンピース';
SELECT * FROM Books WHERE PublicationYear <=2023;