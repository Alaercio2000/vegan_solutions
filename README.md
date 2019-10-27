<img style="object-fit: cover;" src="img/imagemGit.jpg" width="100%" height = "300"/>

<h1>
    Veganices
</h1>



 Veganices é um site ideal para quem busca informações sobre o veganismo. Vamos apresentar diversas informações relevantes para quem é vegano, ou para quem tem curiosidade no assunto, facilitando também o processo de quem está em transição, já que mostraremos opções de restaurantes, produtos e profissionais da área, além de um blog e página de interação, onde todos poderão tirar dúvidas e compartilhar conhecimento sobre o assunto. 



<h2>
    Índices
</h2>

<ul>
    <li><a href="#criadores">Criadores</a></li>
        <li><a href="#comunidade">Comunidade</a></li>
        <li><a href="#blog">Blog</a></li>
        <li><a href="#produtos">Produtos</a></li>
        <li><a href="#profissionais">Profissionais</a></li>
        <li><a href="#restaurantes">Restaurantes</a></li>
</ul>





<h2 id="criadores">
    Criadores
</h2>



<ul>
     <a style="padding-left: 6px;" href="https://github.com/Alaercio2000"><img width="75" src="https://avatars3.githubusercontent.com/u/49242568?s=460&v=4" alt="Imagem Perfil"></a>
        <a style="padding-left: 6px;" href="https://github.com/anacarolsfcabral"><img width="75" src="https://avatars2.githubusercontent.com/u/11450997?s=400&v=4" alt="Imagem Perfil"></a>
        <a style="padding-left: 6px;" href="https://github.com/Marcelomata2"><img width="75" src="https://avatars0.githubusercontent.com/u/56271262?s=400&v=4" alt="Imagem Perfil"></a>
        <a style="padding-left: 6px;" href="https://github.com/AustinEdmar"><img width="75" src="https://avatars0.githubusercontent.com/u/53894735?s=400&v=4" alt="Imagem Perfil"></a>
        <a style="padding-left: 6px;" href="https://github.com/mari0611"><img width="75" src="https://avatars3.githubusercontent.com/u/55931941?s=400&v=4" alt="Imagem Perfil"></a>
        <a href="https://github.com/megmiyata"><img width="75" src="https://avatars3.githubusercontent.com/u/55217950?s=460&v=4" alt="Imagem Perfil"></a>
    </ul>



<h2 id="comunidade">
    Comunidade
</h2>



Ambiente de interação entre os usuários. A página será apresentada com diversos tópicos de conversas, e se acessadas, permitirá ver o histórico de todos os comentários e campo para incluí-lo.O usuário também poderá iniciar um novo tópico que será apresentado na página inicial (Comunidade) e ficará disponível para comentários.



<h2 id="blog">
    Blog
</h2>



 Será destinado à apresentação de notícias diversas sobre o veganismo. Terá informações sobre o que acontece no cenário atual, vídeos e outros tópicos relevantes sobre o assunto.



<h2 id="produtos">
    Produtos
</h2>



 Terá lista com opções de vestuário/ calçados, produtos de beleza e alimentação. O usuário será direcionado à página de busca podendo verificar localização, serviços oferecidos e preço. Clicando em alguma das opções, será exibida informação completa e campo para contato direto com o local 



<h2 id="profissionais">
    Profissionais
</h2>



 Onde o usuário poderá buscar profissionais específicos na área (nutrólogos, pediatras e nutricionistas). Estes profissionais também poderão se cadastrar (tela de cadastro), sendo identificado de forma diferenciada nessa busca. 



<h2 id="restaurantes">
    Restaurantes
</h2>



  Será apresentada ao usuário uma lista de diversos restaurantes, à princípio por ordem de classificação. Será possível filtrar por localidade, preço e tipo de restaurante (100%vegano, crudívoro, ovolacto, etc..). Clicando em alguma das opções, será exibida informação completa e campo para contato direto com o local. 



```mermaid
graph TD;
	title[<h2>Diagrama com a estrutura do site]
	title-->Home
	style title fill:#FFF,stroke:#FFF
	linkStyle 0 stroke:#FFF,stroke-width:0;
    Home-->Sobre;
    Home-->Pesquisas;
    Home-->Blog;
    Home-->Comunidade;
    Home-->Cadastro;
    Pesquisas-->Ítem-específico;
    Blog-->Postagem;
    Comunidade-->Tópicos;
    Cadastro-->Perfil;
    
```



