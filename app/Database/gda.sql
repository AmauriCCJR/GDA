CREATE DATABASE gda;
USE gda;

CREATE TABLE empresas (
    cnpj varchar(14) primary key not null,
    nome varchar(100) not null,
    razao_social varchar(100),
    descricao varchar(250),
    estado varchar(2) not null,
    cidade varchar(25) not null,
    cep int(8),
    bairro varchar(100) not null,
    ativo CHAR(1) DEFAULT 'V',
    plano int,
    CONSTRAINT fk_empresas_planos FOREIGN KEY (plano) REFERENCES planos(id_plano)
);

CREATE TABLE acessos(
    id_acesso int not null primary key AUTO_INCREMENT,
    pagina_admin boolean DEFAULT false,
    pagina_funcionario boolean DEFAULT false,
    pagina_dashboard boolean DEFAULT false
)

CREATE TABLE funcoes(
    id_funcao int not null primary key AUTO_INCREMENT,
    nome_funcao varchar(25) not null,
    nivel_acesso int not null,
    CONSTRAINT fk_funcoes_acessos FOREIGN KEY (nivel_acesso) REFERENCES acessos(id_acesso),
    CONSTRAINT fk_funcoes_permissoes FOREIGN KEY (id_permissao) REFERENCES permissoes(id_permissao)
);

CREATE TABLE funcionarios (
    cpf int(11) primary key not null,
    empresa int not null,
    nome_funcionario varchar(50) not null,
    funcao varchar(25) not null,
    data_entrada date not null,
    nivel_permissao int not null,
    CONSTRAINT fk_funcionarios_empresas FOREIGN KEY (empresa) REFERENCES empresas(cnpj),
    CONSTRAINT fk_funcionarios_funcoes FOREIGN KEY (funcao) REFERENCES funcoes(id_funcao),
    CONSTRAINT fk_funcionarios_permissoes FOREIGN KEY (nivel_permissao) REFERENCES permissoes(id_permissao)
);

CREATE TABLE permissoes(
    id_permissao int primary key not null AUTO_INCREMENT,
    nome_permissao_funcao varchar(25) not null,
    criar_processos boolean DEFAULT false,
    editar_processos boolean DEFAULT false,
    excluir_processos boolean DEFAULT false,
    gerar_nota_fiscal boolean DEFAULT false,
    gerar_orçamentos boolean DEFAULT false,
    adicionar_usuarios boolean DEFAULT false,
);

CREATE TABLE planos (
    id_plano int primary key not null AUTO_INCREMENT,
    nome_plano varchar(25) not null,
    valor_plano decimal(10,2) not null,
    descricao varchar(255),
    maximo_processo int not null,
    maximo_usuarios int no null,
    maximo_armazenamento int not null,
    tipo_suporte varchar(25),
    tipo_relatorios varchar(25),
    treinamento boolean DEFAULT false
);




