
SELECT SUM(amount) AS TOTAL_EXP FROM expanses WHERE created_at > NOW() - INTERVAL 1 MONTH;

SELECT SUM(amount) AS TOTAL_INC FROM incomes WHERE created_at > NOW() - INTERVAL 1 MONTH;


