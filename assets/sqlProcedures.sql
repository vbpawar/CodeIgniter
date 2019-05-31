DELIMITER //
CREATE PROCEDURE insert_posts(IN p_category_id INT,IN p_title varchar(255),IN p_slug varchar(255),IN p_body text)
BEGIN
INSERT INTO posts(category_id,title,slug,body) VALUES(p_category_id,p_title,p_slug,p_body);
END //
DELIMITER ;