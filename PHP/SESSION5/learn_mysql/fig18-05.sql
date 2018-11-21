-- lay productName, listPrice, discountPercent, categoryID tu bang product, chi lay cac gia tri co categoryID = 1 va discountPercent = 30;
SELECT productName, listPrice, discountPercent, categoryID
FROM products
WHERE categoryID = 1 AND discountPercent = 30;
-- lay productName, listPrice, discountPercent, categoryID tu bang product, chi lay cac gia tri co categoryID = 1 hoac discountPercent = 30
SELECT productName, listPrice, discountPercent, categoryID
FROM products
WHERE categoryID = 1 OR discountPercent = 30;
-- lay productName, listPrice tu bang product, chi lay cac gia tri ma listPrice <= 500
SELECT productName, listPrice
FROM products
WHERE NOT listPrice >= 500
-- lay productName, listPrice tu bang product, chi lay cac gia tri ma listPrice < 500
SELECT productName, listPrice
FROM products
WHERE listPrice < 500
-- lay productName, listPrice,discountPercent, dateAdded tu bang product, chi lay cac gia tri ma duoc them sau ngay 2010-07-01 
--hoac listPrice < 500 hoac discountPercent > 9
SELECT productName, listPrice, discountPercent, dateAdded
FROM products
WHERE dateAdded > '2010-07-01' 
OR listPrice < 500 AND discountPercent > 9
-- lay productName, listPrice,discountPercent, dateAdded tu bang product, chi lay cac gia tri ma (duoc them sau ngay 2010-07-01 
--listPrice < 500) va (discountPercent > 9)
SELECT productName, listPrice, discountPercent, dateAdded
FROM products
WHERE (dateAdded > '2010-07-01' OR listPrice < 500)
AND discountPercent > 9