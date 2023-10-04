SELECT * FROM tacgia
SELECT * FROM baiviet
SELECT * FROM theloai


a. Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình (2 đ)
SELECT *
FROM baiviet INNER JOIN theloai 
ON theloai.ma_tloai = baiviet.ma_tloai
WHERE theloai.ten_tloai = 'Nhạc trữ tình'

b. Liệt kê các bài viết của tác giả “Nhacvietplus” (2 đ)
SELECT ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, noidung, baiviet.ma_tgia, ten_tgia, ngayviet, hinhanh
FROM baiviet INNER JOIN tacgia
ON baiviet.ma_tgia = tacgia.ma_tgia
WHERE tacgia.ten_tgia = 'Nhacvietplus'
GROUP BY ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, noidung, baiviet.ma_tgia, ten_tgia, ngayviet, hinhanh

c. Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào. (2 đ)
SELECT theloai.ten_tloai
FROM theloai
WHERE NOT EXISTS (
   SELECT 1
   FROM baiviet
   WHERE baiviet.ma_tloai = theloai.ma_tloai)

d. Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên 
thể loại, ngày viết. (2 đ)
SELECT ma_bviet AS 'Mã bài viết', tieude AS 'Tên bài viết', 
ten_bhat AS 'Tên bài hát', ten_tgia AS 'Tên tác giả', ten_tloai AS 'Tên thể loại', ngayviet AS 'Ngày viết'
FROM baiviet INNER JOIN tacgia 
ON baiviet.ma_tgia = tacgia.ma_tgia
INNER JOIN theloai ON 
baiviet.ma_tloai = theloai.ma_tloai
GROUP BY ma_bviet, tieude, ten_bhat, ten_tgia, ten_tloai, ngayviet

e. Tìm thể loại có số bài viết nhiều nhất (2 đ)
SELECT theloai.ten_tloai AS 'Tên thể loại', COUNT(baiviet.ma_tloai) AS 'Thể loại có số bài viết nhiều nhất: '
FROM baiviet INNER JOIN theloai
ON baiviet.ma_tloai = theloai.ma_tloai
GROUP BY theloai.ten_tloai
HAVING COUNT(baiviet.ma_tloai) >= ALL (
		SELECT COUNT(baiviet.ma_tloai)
		FROM baiviet INNER JOIN theloai
		ON baiviet.ma_tloai = theloai.ma_tloai
		GROUP BY theloai.ten_tloai)

f. Liệt kê 2 tác giả có số bài viết nhiều nhất (2 đ)
SELECT tacgia.ten_tgia AS 'Tên tác giả', COUNT(*) AS 'Số bài viết' 
FROM tacgia INNER JOIN baiviet 
ON tacgia.ma_tgia = baiviet.ma_tgia
GROUP BY tacgia.ma_tgia, tacgia.ten_tgia
ORDER BY 'Số bài viết' 
DESC LIMIT 2

g. Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, 
“em” (2 đ)
SELECT * FROM baiviet
WHERE noidung LIKE '%yêu%' OR 
		noidung LIKE '%thương%' OR 
		noidung LIKE '%anh%' OR 
		noidung LIKE '%em%' 

h. Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ 
“yêu”, “thương”, “anh”, “em” (2 đ)
SELECT * FROM baiviet
WHERE tieude LIKE '%yêu%' OR 
		tieude LIKE '%thương%' OR 
		tieude LIKE '%anh%' OR 
		tieude LIKE '%em%' 

i. Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm theo Tên 
thể loại và tên tác giả (2 đ)
CREATE VIEW vw_Music AS
SELECT baiviet.*, theloai.ten_tloai, tacgia.ten_tacgia
FROM baiviet
JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
JOIN tacgia ON baiviet.ma_tacgia = tacgia.ma_tacgia

j. Tạo 1 thủ tục có tên sp_DSBaiViet với tham số truyền vào là Tên thể loại và trả về danh sách 
Bài viết của thể loại đó. Nếu thể loại không tồn tại thì hiển thị thông báo lỗi. (2 đ)

k. Thêm mới cột SLBaiViet vào trong bảng theloai. Tạo 1 trigger có tên tg_CapNhatTheLoai để
khi thêm/sửa/xóa bài viết thì số lượng bài viết trong bảng theloai được cập nhật theo. (2 đ)
ALTER TABLE theloai
ADD COLUMN SLBaiViet INT;

l. Bổ sung thêm bảng Users để lưu thông tin Tài khoản đăng nhập và sử dụng cho chức năng 
Đăng nhập/Quản trị trang web. (5 đ)