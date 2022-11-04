# Mo-Li Movies List

##### About and features
My first React project based on a movies list from [TMDB](https://www.themoviedb.org/)'s API. React helped me to quickly and easily update a large number of data coming from two different databases – TMDB’s and mine. And also to have a simpler and easier to correct composition of the code structured in components. 

All types of lists available in the project:
 - the **newest** popular released movies at the website opening
 - lists of movies sorted by **genre**
 - **search** option by title
 - **random** suggestions option for those who don't want a specific movie
 - personalized list of movies you **want** to see – only for those who have an account
 - personalized list of movies you've **seen** – only for those who have an account

My website provide the possibility of creating user account with an email (even a fake email), user name, age* and password. Logging in is done only based on the email and the password.
*<sub>*if the user is under 18 years old, all adult content will be blocked. But even if the user is over 18 years old, he can block manually that content by unchecking the Adult Content Box in the user settings tab.*</sub>

##### Challenges and future goals
Since this was my first significant project in the React library, I encountered a lot of challenges. Among which I had to learn to use useState and useEffect correctly and to structure the code into components that are easy to reuse later – an otherwise fascinating feature of React. 
A big challenge was the use of the large object-type state variable, the variable that stores the data about the displayed movies. This is entirely updated often in the code and I had to reduce the amount of repetitive code by creating functions. But the number of functions created to update the variable seems quite large to me, and in the future I would like to reduce these repetitions even more. This would help me to easily add more details about each movie and make the application more interactive. 
In addition, I really want to learn to add more complicated transitions in React.

##### How to access
The project can be fully viewed just by accessing the following link: https://mo-li-movies-list.000webhostapp.com/. It is hosted on 000WebHost platform.

##### Some Helpful Links:
- [React Snackbar component - Material UI](https://mui.com/material-ui/react-snackbar/)
- [Table API – MUI](https://mui.com/api/table/#props)
- [Showtime Font | dafont.com](https://www.dafont.com/showtime.font)
- [Josefin Sans - Google Fonts](https://fonts.google.com/specimen/Josefin+Sans)
- [Lists and Keys – React](https://reactjs.org/docs/lists-and-keys.html)
- [reactjs - What is the best way to manage a user's session in React? - Stack Overflow](https://stackoverflow.com/questions/42420531/what-is-the-best-way-to-manage-a-users-session-in-react)
- [javascript - How to get values from Promise in React? - Stack Overflow](https://stackoverflow.com/questions/66153678/how-to-get-values-from-promise-in-react)
- [How to work with checkboxes in React | CodingDeft.com](https://www.codingdeft.com/posts/react-checkbox/)
- [Add or Remove a Class on click in React | bobbyhadz](https://bobbyhadz.com/blog/react-add-remove-class-on-click)
- [HTML Web Storage API](https://www.w3schools.com/html/html5_webstorage.asp)
