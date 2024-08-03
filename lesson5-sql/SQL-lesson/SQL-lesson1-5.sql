/*
    課題：
    - 以下のコメントに従いコードを記述してください！
    - 課題が出来次第、保存して、このファイルを提出してください。
    dockerのlesoon5-phpコンテナを起動　→　DBeaver　実行して結果を確認
*/


 /*
    1.  Booksテーブルに、
    id=4, title="残業の正しい減らし方" , PublicationYear = 2024 ,author = 'Ryoma Koyasu' , ISBN = 4444-221のレコードと
    id=5, title="宝くじ当たらねーかな？" , PublicationYear = 2021 ,author = '怠け　もの男' , ISBN = 55114-184 
    のレコードを1回で挿入するSQL

    2. Booksテーブルの、id=4のレコードを、title="今からできる、うつ病対策", PublicationYear = 2024, author = '闇　ヤミー' , ISBN = 42251-184といった内容に更新するSQL
    3. Booksテーブルの、student_id=5のレコードを全て削除するSQL
*/

INSERT INTO Books (id,title,PublicationYear,author,ISBN) VALUES (4,'残業の正しい減らし方',2024,'Ryoma Koyasu','4444-221'),
INSERT INTO Books (id,title,PublicationYear,author,ISBN) VALUES (5,'宝くじ当たらねーかな？',2021,'怠け　もの男','55114-184');

UPDATE Books SET title ='今からできる、うつ病対策',PublicationYear =2024, author = '闇　ヤミー',ISBN = '42251-184' WHERE id=4;

DELETE FROM Books where student_id =5;