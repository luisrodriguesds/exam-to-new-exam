# sistemaPHP
Esse conjunto de código foi criado para facilitar quem quer iniciar seus estudos com php. Nele Foram criados um conjunto de funções que torna processos como consulta em banco de dados, assim como sua conexão, mais fácies e práticas

# Iniciando
Para iniciar um projeto com esse framework, pasta copiar a pasta sistema para o seu projeto. Após isso, você deve colocar as informações de banco de dados e URL do seu projeto no arquivo configuracao.init e incluir o arquivo system.php (include 'system.php') no seu arquivo php.

# Usando
Para usar uma funçao simples como a DBread, que lê do banco de dados e retorna em forma de array, basta inciar a conexão com

$link = DBconnc();

dar set na variável e fazê-la receber a função, que tem como parâmetros a conexão, a tabela, a query e os campos que devem ser tragos.

$teste = DBread($link, 'tabela_teste', "WHERE id = '1'", 'id, nome, sobrenome');

Após isso, deve-se fechar a conexão com

DBclose($link);

# Read
	DBread($link, $table, $params = null, $fields = '*')

# Update
	DBUpDate($link, $table, array $data, $where = null, $insertId = false)

# Delete
	DBDelete($link, $table, $where = null);

# Insert
	DBcreate($link, $table, array $data, $insertId = true)

# Clear field
 	DBescape($link, $dados)

# OBS
	Esse conjunto de funções deve ser usado para estudos e pequenos projetos.

	