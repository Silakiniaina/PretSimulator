CREATE OR REPLACE VIEW v_customer_list_info AS 
    SELECT  c.customer_id AS customer_id,
            c.first_name AS first_name,
            c.last_name AS last_name,
            c.email,a.address AS adress,
            a.district AS district 
    FROM customer AS c 
    JOIN address AS a 
    ON c.address_id=a.address_id
;