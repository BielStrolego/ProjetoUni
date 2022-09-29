drop database if exists Uni_Bank;
create database if not exists Uni_Bank;
use Uni_Bank;


CREATE TABLE IF NOT EXISTS carrocel (
    idCarrocel INT AUTO_INCREMENT,
    nomeCarrocel VARCHAR(50) NOT NULL,
    promoCarrocel varchar(10),
    imagemCarrocel varchar(500) NOT NULL,
    ordemCarrocel INT,
     PRIMARY KEY (idCarrocel)
);



CREATE TABLE IF NOT EXISTS jogo (
    idJogo INT AUTO_INCREMENT,
    nomeJogo VARCHAR(50) NOT NULL,
    logoJogo varchar(500) NOT NULL,
    trailerJogo varchar(500),
    imagem1 varchar(500),
    imagem2 varchar(500),
    imagem3 varchar(500),
    dataJogo DATE NOT NULL,
    descricao VARCHAR(1500) NOT NULL,
    precoJogo VARCHAR(100),
    PRIMARY KEY (idJogo)
);

CREATE TABLE IF NOT EXISTS usuario (
    idUsuario INT AUTO_INCREMENT,
    nomeUsuario VARCHAR(100),
    email VARCHAR(100),
    senha VARCHAR(100),
    PRIMARY KEY (idUsuario)
);

CREATE TABLE IF NOT EXISTS biblioteca (
    idBiblioteca INT AUTO_INCREMENT,
    nomeJogo VARCHAR(100),
    logoJogo VARCHAR(500),
    Imagem1 VARCHAR(500),
    PRIMARY KEY (idBiblioteca)
);

INSERT INTO carrocel (idCarrocel,nomeCarrocel,promoCarrocel,imagemCarrocel,ordemCarrocel) values ('1','GTA V',' (40% off) ','imgs/gtabaner.jpg','1'),
('2','Dark Souls lll',' (10% off) ','imgs/DarksoulsBaner.jpg','2'),
('3','Hollow Knight',' (50% off) ','imgs/Hollow_KnightBaner.jpg','3');

INSERT INTO jogo (idJogo,nomeJogo,logoJogo,trailerJogo,imagem1,imagem2,imagem3,dataJogo,descricao,precoJogo) values ('1','GTA V','https://ae01.alicdn.com/kf/HTB1aeNfKFXXXXXdXVXXq6xXFXXXx/High-quality-GTA-V-Grand-Theft-Auto-V-Logo-Rockstar-Games-100-Cotton-Casual-Fashion-Loose.jpg_Q90.jpg_.webp','https://www.youtube.com/embed/QkkoHAzjnUs','https://t2.tudocdn.net/615108?w=1920','https://dropsdejogos.uai.com.br/wp-content/uploads/sites/10/2022/03/reproducao-gta-online-divulgacao-scaled-1280x720.jpg','https://img.generation-nt.com/gta-5-pc-12_01621785.jpg','2013/09/17','Grand Theft Auto V é um jogo eletrônico de ação-aventura desenvolvido pela Rockstar North e publicado pela Rockstar Games.','R$149,99(-40%)'),
('2','Dark Souls lll','https://i.pinimg.com/474x/c7/37/bf/c737bfe42a631841fdf8600ce94887bd--dark-souls--all-games.jpg','https://www.youtube.com/embed/o1780AqAa20','https://www.hardware.com.br/static/20160323/dark.jpg?fm=pjpg&ixlib=php-3.3.0','https://cdn.cloudflare.steamstatic.com/steam/apps/211420/ss_c34cdf130b9ac71c99196007d1e78c05305652b9.1920x1080.jpg?t=1654679748','https://s2.glbimg.com/5X2QpNC6hhi2FmmlISFey2LgO-0=/0x0:695x391/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2021/d/S/wPBOhlReiKFNZlaL5T3g/2016-02-19-dark-soul-atacar.jpg','2011/09/22','Dark Souls é um jogo eletrônico de RPG de ação desenvolvido pela FromSoftware e publicado pela Namco Bandai Games. Lançado originalmente em setembro de 2011 para PlayStation 3 e Xbox 360, é um sucessor espiritual de Demons Souls e a segundo título da série Souls.','R$ 79,99(-10%)'),
('3','Hollow Knight','https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/c78bc3fc-9f08-47ca-81ae-d89055c7ec49/dcjf1g7-ef5c3044-7449-4cce-a87c-32c5b79ca798.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2M3OGJjM2ZjLTlmMDgtNDdjYS04MWFlLWQ4OTA1NWM3ZWM0OVwvZGNqZjFnNy1lZjVjMzA0NC03NDQ5LTRjY2UtYTg3Yy0zMmM1Yjc5Y2E3OTgucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.CJd_R1wU_2Ci5ZnqqGu34bQtv9slysOVrnJsKtxSN4s','https://www.youtube.com/embed/UAO2urG23S4','https://store-images.s-microsoft.com/image/apps.24270.13847644057609868.a4a91f76-8d1c-4e19-aa78-f4d27d2818fb.d96146d7-d00a-4db9-ad68-197b2f962a17','https://s2.glbimg.com/KJirn_9D2nWYmM0fDEeyccji3tY=/800x0/smart/filters:strip_icc()/s.glbimg.com/po/tt2/f/original/2020/04/14/hollow-knight-2.jpg','https://progameguides.com/wp-content/uploads/2022/07/Featured-Hollow-Knight-How-to-swim-in-acid-in-Hollow-Knight-900x506.jpg','2017/02/24','Hollow Knight é um jogo indie de gênero metroidvania desenvolvido e publicado pela Team Cherry, lançado para Microsoft Windows, macOS e Linux em 2017 e, posteriormente, para Nintendo Switch, Playstation 4 e Xbox One em 2018.','R$11,99(-50)'),
('4','Fortnite','https://pbs.twimg.com/media/E_JOHojXEAI_oOZ.png','https://www.youtube.com/embed/BJ6-q__4miw','https://macmagazine.com.br/wp-content/uploads/2018/04/02-fortnite.jpg','https://classic.exame.com/wp-content/uploads/2018/07/fortnitedivulga.jpg?quality=70&strip=info&w=1024','https://files.tecnoblog.net/wp-content/uploads/2019/08/fortnite-season-x.jpg','2017/06/21','Fortnite é um jogo eletrônico multijogador online revelado originalmente em 2011, desenvolvido pela Epic Games e lançado como diferentes modos de jogo que compartilham a mesma jogabilidade e motor gráfico de jogo.','Gratis'),
('5','Have a Nice Death','https://cdn.haveanicedeath.com/hand_assets/images/home/shinigami_soul.png','https://www.youtube.com/embed/LUqVHaR1PKo','https://images2.alphacoders.com/121/1217198.jpg','https://images.g2a.com/1920x1080/1x1x0/have-a-nice-death-pc-steam-key-global/11cd0bdddd22493d8be05097','https://assets2.rockpapershotgun.com/HaveaNiceDeath_FastFood_KeyArt.jpg/BROK/resize/1920x1920%3E/format/jpg/quality/80/HaveaNiceDeath_FastFood_KeyArt.jpg','2017/06/21','Have a Nice Death é um roguelike de ação 2D no qual você joga como a Morte, sobrecarregada de trabalho devido ao desequilíbrio de almas causado por seus funcionários fora de controle.','R$37,00'),
('6','Assassins Creed Valhalla','https://i.pinimg.com/originals/dc/29/36/dc2936110e564c7ba2db58b10a9cfd18.jpg','https://www.youtube.com/embed/TUbgBVTD7VI','https://image.api.playstation.com/vulcan/ap/rnd/202009/2123/e3ssIZOu5Ues8m0o7dZj5qet.jpg','https://www.comboinfinito.com.br/principal/wp-content/uploads/2020/05/Gw3EMuNjmPJD8ZxSCqQ4T9.jpg','https://i.ytimg.com/vi/qdzb2OHMuVo/maxresdefault.jpg','2017/06/21','Torne-se Eivor, um invasor Viking lendário em busca de glória. Explore a Idade das Trevas da Inglaterra enquanto ataca seus inimigos, amplia seu assentamento e consolida seu poder político.','R$199,99'),
('7','Rocket League','https://logos-world.net/wp-content/uploads/2020/11/Rocket-League-Emblem.png','https://www.youtube.com/embed/OmMF9EDbmQQ','https://www.pichauarena.com.br/wp-content/uploads/2020/09/egs-social-rocketleague-news-1920x1080-1920x1080-975383433.jpg','https://files.tecnoblog.net/wp-content/uploads/2019/05/rocket-league.jpg','https://img.olympicchannel.com/images/image/private/t_16-9_3200/primary/qf91enynlq3hlgtkmbon','2015/06/07','Rocket League é um jogo eletrônico de futebol em veículos desenvolvido e publicado pela Psyonix. Foi lançado pela primeira vez para Microsoft Windows e PlayStation 4 em julho de 2015, com as portes para o Xbox One, MacOS, Linux e Nintendo Switch sendo lançados posteriormente.','Gratis'),
('8','Fall Guys','https://cdn2.unrealengine.com/fallguys-ss2-primary-1909x1189-4c9d6a0f3f3c.png?resize=1&w=1920','https://www.youtube.com/embed/s8uYE9r3hIg','https://1.bp.blogspot.com/-xqapRSkVuIs/Xze75f21F7I/AAAAAAAAI0w/5IRVlsMxCRAhMkwYBxB2ke5in4qbw7f1wCNcBGAsYHQ/s1600/Fall%2BGuys%2Bcover.jpg','https://i.ytimg.com/vi/GAiaXIxS_4c/maxresdefault.jpg','https://1.bp.blogspot.com/-AArYQJrI2ro/XzfF3QUJ2DI/AAAAAAAAI1A/7idalxTwbd4nXows3RSDoEx3uXUA_R6EgCNcBGAsYHQ/s1600/20200805193621_1.jpg','2020/08/04','Fall Guys é um jogo eletrônico de plataforma battle royale desenvolvido pela Mediatonic. Foi lançado pela Devolver Digital para Microsoft Windows e PlayStation 4 em 4 de agosto de 2020.','Gratis'),
('9','Borderlands 3','https://cdn140.picsart.com/293781851020211.png','https://www.youtube.com/embed/CFD92oirLB4','https://cdn-ext.fanatical.com/production/product/1280x720/381d7788-ccc9-42e0-a237-00cd329b69eb.jpeg','https://s2.glbimg.com/vaXsznERv19PfaGw8E35FABvXgU=/0x0:695x390/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2019/0/s/cKJpdWRcaWhYfkRpOnAg/borderlands-3-review-1.jpg','https://diariodonordeste.verdesmares.com.br/image/contentid/policy:1.3233272:1653042764/Game.jpg?f=16x9&h=720&q=0.8&w=1280&$p$f$h$q$w=1d8d3b4','2019/09/13','Borderlands 3 é um jogo eletrônico de RPG de ação desenvolvido pela Gearbox Software e publicado pela 2K Games. É a sequência de Borderlands 2 e o quarto título principal da série Borderlands. Foi lançado em 13 de setembro de 2019 para Microsoft Windows, PlayStation 4 e Xbox One.','R$ 81,73');

