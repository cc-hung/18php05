-- lay productName, listPrice tu bang product noi ma co categoryID = 2;
SELECT productName, listPrice
FROM products
WHERE categoryID = 2;
-- lay productName, listPrice tu bang product noi ma co cproductName = 'Gibson Les Paul'
SELECT productName, listPrice
FROM products
WHERE productName = 'Gibson Les Paul';
-- lay productName, listPrice tu bang product noi ma co listPrice < 549.99
SELECT productName, listPrice
FROM products
WHERE listPrice < 549.99;
-- lay productName, listPrice tu bang product noi ma co listPrice < 549.99
SELECT productName, listPrice
FROM products
WHERE listPrice >= 549.99;
-- lay productName, listPrice tu bang product noi ma productName khong co ki tu G
SELECT productName, listPrice
FROM products
WHERE productName < 'G';
-- lay productName, listPrice, dateAdded tu bang product, chi lay cac gia tri co ngay them truoc ngay 2010-01-30
SELECT productName, listPrice, dateAdded
FROM products
WHERE dateAdded < '2010-01-30';
-- lay productName, listPrice, dateAdded tu bang product, chi lay cac gia tri co ngay them sau hoac trong  ngay 2010-01-30
SELECT productName, listPrice, dateAdded
FROM products
WHERE dateAdded >= '2010-01-30';
-- lay productName, listPrice, dateAdded tu bang product, chi lay cac gia tri co discountPercent khac 30
SELECT productName, listPrice, discountPercent
FROM products
WHERE discountPercent <> 30;
