SELECT
    u.client_id,
    COUNT(*) AS "number of users",
    c.name AS "client name"
FROM
    users u
    LEFT JOIN clients c ON u.client_id = c.id
GROUP BY
    client_id