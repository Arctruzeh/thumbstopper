SELECT
    u.id,
    u.name,
    c.name
FROM
    users u
    LEFT JOIN clients c ON u.client_id = c.id
ORDER BY
    u.id ASC