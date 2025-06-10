<a href="?exo=1" class="underline-hover">Exercice 1</a>
<a href="?exo=1bis" class="underline-hover">Exercice 1bis</a>
<a href="?exo=2" class="underline-hover">Exercice 2</a>
<a href="?exo=3" class="underline-hover">Exercice 3</a>
<a href="?exo=4" class="underline-hover">Exercice 4</a>
<a href="?exo=5" class="underline-hover">Exercice 5</a>
<a href="?exo=6" class="underline-hover">Exercice 6</a>
<a href="?exo=7" class="underline-hover">Exercice 7</a>
<style>
.underline-hover {
  position: relative;
  color: white;
  text-decoration: none;}

.underline-hover::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: 0;
  width: 0;
  height: 2px;
  background-color: white;
  transition: all 0.4s ease;
  transform: translateX(-50%);}

.underline-hover:hover::after {
  width: 100%;}
</style>