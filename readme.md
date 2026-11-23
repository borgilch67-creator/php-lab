# PHP & MySQL Лабораторийн ажил (php-lab)

Энэхүү төсөл нь PHP 8 болон MySQL (XAMPP) ашиглан хөгжүүлсэн вэб аппликейшн юм.

## Шаардлагатай программ
- XAMPP (Apache, MySQL, PHP 8+)
- Вэб хөтөч (Chrome, Edge, Firefox)

## Ажиллуулах заавар (XAMPP)
1. Төслийн хавтсыг `C:\xampp\htdocs\php-lab` замд хуулж байрлуулна.
2. XAMPP Control Panel-ийг нээж **Apache** болон **MySQL** үйлчилгээнүүдийг асаана (Start).
3. Вэб хөтөч дээр `http://localhost/php-lab/` хаягаар орж ажиллуулна.

## Өгөгдлийн сан тохируулах (Import)
1. Вэб хөтөч дээр `http://localhost/phpmyadmin` руу орно.
2. Зүүн талын **New** дээр дарж `phplab` нэртэй өгөгдлийн сан үүсгэнэ (Collation: `utf8mb4_general_ci`).
3. Үүсгэсэн `phplab` сангаа сонгоод дээд талын **Import** таб руу орж, төслийн `database/phplab.sql` файлыг сонгон **Go** (Import) дарна.

## Хуудсуудын жагсаалт
- `index.php` — Нүүр хуудас болон бусад хуудсуудын холбоос
- `basics.php` — PHP үндсэн синтакс, хувьсагч, superglobal туршилт
- `contact.php` — HTML форм болон POST өгөгдөл боловсруулах
- `grade.php` — Оператор болон нөхцөл шалгах бүтэц (`if`, `switch`, `match`)
- `calculator.php` — Энгийн тооны машин
- `students.php` — Массив, built-in болон хэрэглэгчийн функц, давталт
- `users.php` — Хэрэглэгчийн жагсаалт болон CRUD үйлдэл (Нэмэх, Засах, Устгах)
- `search.php` — Өгөгдлийн сангаас сэтгэгдэл хайх
- `session_test.php` — Session үүсгэх, удирдах туршилт
- `hash_test.php` — Нууц үгийг hash хийх болон шалгах туршилт
- `account.php` — MVC бүтэцтэй хэрэглэгчийн бүртгэл, нэвтрэх, гарах систем
- `members.php` — Зөвхөн нэвтэрсэн хэрэглэгчид харагдах хуудас
