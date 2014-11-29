--
-- População da tabela localidade
--
INSERT INTO ufbaconvida.localidade (id, endereco) VALUES
(1, "Ondina"),
(2, "Canela"),
(3, "Piedade"),
(4, "São Lázaro"),
(5, "Federação");

--
-- População da tabela departamento
--
INSERT INTO ufbaconvida.departamento (id, nome, localidade_id) VALUES
(1, "Computacao", 1),
(2, "Sistema de Informacao", 1),
(3, "Estatistica", 1),
(4, "Matematica", 1),
(5, "Medicina", 2),
(6, "Odontologia", 2),
(7, "Direito", 2),
(8, "Sociologia", 4),
(9, "Economia", 3),
(10, "Engenharia Civil", 5),
(11, "Arquitetura", 5);

--
-- Populaçao da tabela academico
--
INSERT INTO ufbaconvida.academico (id, nome, endereco, data_nascimento, telefone, email, departamento_id) VALUES
(1, 'DENNIS LESSA', 'CAMPO GRANDE', '0000-00-00', '00 0000 0000', 'dennislessa@dcc.ufba.br', 1),
(2, 'EULER SANTANNA', 'ITAPUA', '0000-00-00', '00 0000 0000', 'eulersantanna@dcc.ufba.br', 1),
(3, 'AMANDA SOTERO', 'RIBEIRA', '0000-00-00', '00 0000 0000', 'amandasotero@dcc.ufba.br', 1);

--
-- População da tabela aluno
--
INSERT INTO ufbaconvida.aluno (academico_id, matricula, curso, senha) VALUES
(1,'11111111111111', 'computação', MD5('123')),
(2,'22222222222222', 'computação', MD5('456'));

--
-- Populaçao da tabela professor
--
INSERT INTO ufbaconvida.professor (academico_id, siape, senha) VALUES
(3, '33333333333333', MD5('789'));

/*
--
-- População da tabela evento
--
INSERT INTO ufbaconvida.evento(id, titulo, link, cartaz, inicio, fim, descricao, academico_id) VALUES
(1, 'CONGRESSO', 'http://congresso.com.br', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'DESCRICAO 1', 1),
(2, 'PALESTRA', 'http://palestra.com.br', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'DESCRICAO 2', 2),
(3, 'SEMCOMP', 'http://semcomp.com.br', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'DESCRICAO 3', 3),
(4, 'SIMPOSIO', 'http://simposio.com.br', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'DESCRICAO 4', 2),
(5, 'ERBASE', 'http://erbase.com.br', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'DESCRICAO 5', 1);

--
-- População da tabela atividade
--
INSERT INTO ufbaconvida.atividade (id, titulo, horario, descricao, data, evento_id) VALUES
(1, 'BD', '00:00:00', 'MINERAÇÃO DE DADOS', '0000-00-00', 1),
(2, 'IA', '00:00:00', 'MINERAÇÃO DE TEXTOS', '0000-00-00', 2),
(3, 'ALGORITMOS', '00:00:00', 'DESEMPENHO', '0000-00-00', 3),
(4, 'ENG SOFTWARE', '00:00:00', 'PADRÕES DE PROJETO', '0000-00-00', 4),
(5, 'TAD', '00:00:00', 'NOVA ESTRUTURA', '0000-00-00', 5);
*/
