-- SQL calculation for weighted average

CREATE VIEW riskscore_view AS
SELECT SUM(factor_weight * factor_score) / SUM(factor_weight) AS riskscore
FROM risk_factors;


