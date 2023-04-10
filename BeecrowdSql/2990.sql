select empregados.cpf, empregados.enome, departamentos.dnome
from empregados, departamentos where empregados.dnumero = 
departamentos.dnumero and empregados.cpf not in (select 
trabalha.cpf_emp from trabalha) order by empregados.cpf;