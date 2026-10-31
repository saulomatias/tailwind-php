# Projeto base: PHP + Tailwind CSS 4

## Pré-requisitos
- WAMP, XAMPP ou Laragon (para rodar o PHP)
- Node.js instalado (https://nodejs.org), só para gerar o CSS

## Como começar
1. Copie esta pasta para dentro de:
   - WAMP: `C:\wamp64\www\`
   - XAMPP: `C:\xampp\htdocs\`
   - Laragon: `C:\laragon\www\`
2. Abra a pasta no VS Code e, no terminal, rode uma única vez:
   ```
   npm install
   ```
3. Enquanto estiver programando, deixe rodando:
   ```
   npm run dev
   ```
   Ele fica "vigiando" os arquivos .php e atualiza o CSS sempre que você salva.
4. Abra no navegador: `http://localhost/tailwind-php/`
   (no Laragon também funciona `http://tailwind-php.test`)

## Estrutura
```
tailwind-php/
├── index.php            página inicial
├── sobre.php            exemplo de 2ª página
├── partials/
│   ├── header.php       topo (head, menu) — incluído em todas as páginas
│   └── footer.php       rodapé
├── src/input.css        CSS de ENTRADA (você edita este)
├── assets/css/style.css CSS GERADO (não edite, é sobrescrito)
└── package.json         comandos npm
```

## Por que as classes nos .php não funcionavam?
O Tailwind só gera o CSS das classes que ele **encontra** nos arquivos.
Por isso o `src/input.css` tem esta linha, apontando para todos os .php:
```css
@source "../**/*.php";
```
Se criar arquivos com outra extensão (ex.: .html, .js), adicione outra linha `@source`.

## Problemas comuns
- **Mudei a classe e nada aconteceu** → o `npm run dev` está rodando? Dê Ctrl+F5 no navegador (cache).
- **Página sem estilo nenhum** → confira se o `<link>` no header aponta para `assets/css/style.css`.
- **Para publicar** → rode `npm run build` (gera o CSS minificado).
