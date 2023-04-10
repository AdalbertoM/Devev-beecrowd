SELECT candidate.name,cast((((score.math * 2) + 
(score.specific*3) + (score.project_plan*5)) / 10) as numeric(15, 2)) avg FROM candidate inner join score on candidate.id = 
score.candidate_id order by avg desc;