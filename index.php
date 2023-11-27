<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Do To List</title>
</head>
<body>
    <div id="app">
       <div class="container">
         <input type="text" v-model="newTodo" @keyup.enter= "storeTodo" placeholder="storeTodo" >
       
       </div>
       <div class="container" >
       <h1 >{{title}}</h1>
        <ul>
            <li v-for="(todo, i) in todos" :key="i" >
                <span>{{todo.text}}</span> 
                <span> <button @click=""> elimina</button> </span>
        </li>
            
        </ul>
       </div>
    </div>
    <script src="./js/app.js"></script>
</body>
</html>