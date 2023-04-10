select name from ((select position, 'Podium: ' || team as name
from league limit 3) union (select * from (
select position, 'Demoted: ' || team as name
from league order by position desc limit 2) as d
order by position asc)) as teams order by position asc;