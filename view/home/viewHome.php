








<div class="container">


<div class="row text-center">

    <h2 class="text-center text-secondary">
    
    VOTRE PHARMACIE !
    
    </h2>

</div>


<div class="row text-center">


    <p class="lead text-center">Lorem ipsum dolor sit commodi  molestias impedit placeat omnis, sunt hic soluta. Adipisci, expedita tenetur aut quaerat minima officiis dolores odio ipsa modi, optio perspiciatis ipsam repellat alias excepturi eligendi. Beatae, voluptas? Autem neque cum sit impedit, quisquam beatae eaque debitis laudantium, cupiditate aliquid vero laborum at, ratione consequatur? Quis distinctio sunt dicta laudantium, doloribus facere minus veniam nemo tempora earum? Perspiciatis, facilis quisquam laudantium quasi quod, totam consequatur esse dicta nobis, quam voluptatum debitis?</p>


</div>






<div class="row text-center">
    
    <h1 class="text-primary">latest medicamant</h1>

</div>


<div class="row">



<?php

foreach($tab_m as $u){


echo "

<div class='card p-1 col-3 w-100' >
<img src='data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxIQEBAQERIVEA8QDw8QEA8PEBAQFxAQFxEWGBYSFxUYHSggGBomHRcVITEhJSkrLi4uFx8zOjMsNygtLisBCgoKDg0OGxAQGi0lHyUtLS0tLSstLTUuLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSstLS0tLS0tLf/AABEIAMIBAwMBEQACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAAAQIDBAUGBwj/xAA8EAACAQIDBQUFBwMDBQAAAAAAAQIDEQQFIQYSMUFREyJhcYEHUpGhsRQjMkLB0fAVYnIWM+E0Y5Kisv/EABsBAQACAwEBAAAAAAAAAAAAAAABAwIEBQYH/8QAMBEBAAICAQMDAQYHAQEBAAAAAAECAxEhBBIxBUFREyIycYGR8AYUYaGxwdFColL/2gAMAwEAAhEDEQA/APcQAACAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACQAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAASAAAAAACAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACQAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAASAAAAAACAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACQAAAAAAQwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACQAAAAAAQwAAAAAAAAAAAAAUzmlxaXm7BMVmfCmFeMuEk/JoiJiUzS0eYXCWIAAAAAAAAAAAAACQAAAAAAQwAAAAAAAAAAAA0eZbQwg3CD3pcHJK6X7lF88RxDpdP6fe8d1+IaSvjpTd2234lE3mXSpgrSNQ0mcZ12Pcg/vXxfuL9ym+XXEeW5h6bv8AtWjj/Ludk82+1YaMm/vI9yp5rn6nQxX76xLzXW9P9DLNfb2Xswz6hRdpTvJflhqyxr1x2t4auW2tG+kJP1iiNwt/l7MjDbW4eejcoeMldfIncMZwWhu6FaM4qUJKUXwcXcKpjXlcCAAAAAAAACQAAAAAAQwAAAAAAAAACJSSTb0S4thMRMzqGhzXOE04R4Pi72uunkUXyx4h0+m6OYnus0brdIpehr9zpRT5lZlRrVrxoKMeUq8r7sPCPvSNPqOqivFWffixc5Pyj3n8fiFuhsJR41a1SpLm4qME36pv5nO/mYjwwv6tkn7tYiP3+Db5fkFPDxqRo1K1PtElJqcXonyvHQvxepTj8Q5/UZ7Z5ibxHDT5hsnU1lSrKf8AbUW6/wDyWj+CNynqdLfe4Y1vHvDm8RgasJOM7wkuTS+XU6FLVvG6ztd3QxK/awi3G0mr6PS/qZalMdsqNmNup4XERjO8Yymo1KcuDu/r4kVyTE8q8/T1tXjy92pzUkpLVSSafg0bDkKgAAAAAAAJAAAAAAAYEAAAAAAuAANgcXnu0kZzdKm7xTtdc31NLL1ETPbD0PRenTWv1L+WudaKi5TkoxWrlJ2SK9xEblt9s71WGHgsYsXW7KndUY96pNaOS5RXS/7nH6/1DsrqOIXZKfy+P6lubT4/o7ShFRilFKMUkklyXQ5tL2tzLgXmbTufKtmUxMcsRMxiNpUzKsvHiUw1+Ow8K0XCa/xkuMX1Rh0nqt8F+Vnb8PJtrsyq4Ks8PODbtvQqcIzg+Ek/quTPZdN1dc9O6v5s9xDlMrw1XGYmPVzjw89EbEV7pV2ye8vqjAQ3KVOHuQhH4JI2tOVM7lkEIAAAAAAASAAAAAAABAAABbrVlHz6ETOmVazLEniW/LwKpv8AC6McQtuq9P5/GVzaWcVhV22nR8fJeJl38I7OVrMKsp0akIy3ZSg0pNcLom15msxDLFWtckWtHES8Fxm0joznGEPvITlCTq/llFtNWT6pnMritE8vW26rHav2eWuq5vWryTqzcrcI8IrySJyV2nFeHf8As1qqUK8ufaxj6KCa+rPMesR23pH9N/3anX37piHodKZOC+4cS0LjZsTtjpQ2VWnTKIW3I17Sy0tVGc3PEbWVcj7SckjisFOe65VsKnWp7v4pRX44eN1rbrFHY9C6rszfTmeJ4/f7+WOSONsz2bbCfZqcMRiVu15JSjQTv2SfDflzl1S0Xie4pPw0MuTu4ejJWM9qEkiCA3h3GlZmxAAACUAAAAAAABAAABpsbWtUd+Hn4I18ltWbWOu6raqLXnproyru+VulyE+6+evN/wA+BMT9ljMfaUTqWXNrXna/h4ETPDKI5YmNzCNNO7Tsm92M43fgrmfbefEMO+keZeE5rs9iJYnEVHKnu1a06t5VoLWct5qyvwba9Cz+VyWiOF1PUcGPju4Kez7S1rwv/wBuFWqvikiY9PtPmUz69jrxWsy6D2dynh61elKcKlOpuzjOnK6jOOjjJOzi7NcuTPNfxB0kxWs65jj8Y/f5ren62vUTOpeo4bEaHmsWecf2ZWXxstVDfrnjXKmakpkXywRVZnVNPJniJ4WRVg47HQpRc5uy+pRiw36jJ21jmWxiw2yTqrTx2h31vUo3jfRvn8eKPUdJ6RhxavO7Wj38R+n/AFuT0MV4vLa4bbOS0qU7+K0fyujvxl15hpZPSKz9yzZYXbLDTdnvQfR2djOM1ZamT0nPXmOW3oZtQn+GrHyb3fqWxeJaV+my081llqafB38tSdqdLc2YpXaMrxT/AJxLY8MJVkoAAEoAAAAAAACAAENgaLMsHVlVc6biotK+89Hp0Wpq5sld8S2MVoiOV2jgml3mr89y9vma3fDOcvxC8qKStx82O+daYTkmeXM7dYF9iq0JSg4SSqbrfeg9OD00dvibPSZdZNT7tXqIm1d7ee1FDjObl5yf0R2NtDtj3ljfa6MeEdOrSHKNVWXnkEtFwCe6HJ47OHDFqtRdmt1S3dN7XVP0saXWY6ZazSV/TzNJ7oetbN7QqrTg5aby0finZ/Q+e9d6fbFbeuHp8WWMlYl1+FUppNLTq9EamHoepyfcjj9/KvLmxU8yyHhp+D9TYt6V1cRvifzUR1mGfdhV5OOjVn4nOvgvjt23jUt7Hq8brO3l23ecyqV3ST7kNPXmem9K6aKYu/3l3eirFKx8oy/P4KMYt2slo9DsVtpdkxd07bOhnEZa3XxLIs15wzEMpYmEuNmieJYdto8MnDUozlGMdHKSirNri7XsuXP0EV3OoV5Ms46za3s9GyfLqeHh3Nb/AIqj4zfi+Zu1pFY4eWz575rbt+nsy6lNT5vR20J7YUcsik0u70RZuGExK4mEJAAEBIAAAAAAIAAa/McVutRXS7OV6j1U0mMdV2Om+VuniFY1seWumUwonjEibZ6x7nax6mYrqU26use6e2Woz3FKth61LnOlUivB7uj+NjCvXxW8THtLG+PurMPnGWc158NPiet+pb2cz6VY8yiNXEVXGnvylKX4acE5Sk+ijFXZE2t7ymKV9ob3C+zrNaq3o4Ou09fvOzov4VJJ/IwmVkVn4Y2Y7CZnh1vTwNey/NCMa1vPs3Irnln2PSfZrkT+z0HXTvBSqOnLTvTm5RUl4K2nU5vWRWdVmF1s1qUitfMvTIsohq6a7Ms6hRvFd6a4pPSPm+vgN/Dq9H6Vkzx3TxX+8uexmeTqaO1r8Ev14lOTDjyRq8beh6f0zHh+75/rP7hocZgMNWd50o3bb3k5Rd/NMsrFKRqsadClLV8f4aLMtmqfGlOz92evzHdps1nu4tGvwc1iaU6MrO8H1u7PyZZS0W8K8tZorpZtVjzv5/8ABnpV368u49n2bvtXVmvu1em3e9m1fhbomr8jPFbttuXO9UnuxxSvvz+j07BZxCuouD3oSjvUe6++ve8V4m3GSJedtimrLpYt6uraD4RSb1148F4Ge2Hb8MlVUmle99Hcljra5B8VwtzvxCJUYXGPecJcnbe5XFbe0otXjcNgZqxASAAAAAACAAGizqD379UrHB9UxTN+5s4Z4a3fZx9WhdwtVGx2Wk4Y9Rsj6aNsWtVsTqY8QidPJ9gtgq2bYiq3J0cFRqyjVrJXcne/Z009N61nfgk1x0R7WszMQ58Uh9D7O7M4TL6ap4WjGnolKdrzn4zm9ZEstNwEgGLicHCd3ZKXvJa+vUpy4K5I58/KJrEuP2qzZ4WlLd/3XLs0/d0bcvgtPFo42SZpM194dP0b0+Oq6jV/u15n+vxH79nB4OtOb35N21sn16mFJmXustK0jtiG1jG6ubENGZ5Uzj4ETDKJa3HUOa4+BRevw28OT2loMdBVE4TV+j5pldLzWdw3bYaZKTWfEuRrOVOcoPinx6rkzrV1esWh5fLa+DLOK3t/ePaXb7B13RhPERlFvWm6LbTabVprj06cuOhhzE8NbqprfUT8f7d/KNRpSpuNOVKlL8W895ys7cbJacTPtmfDn2mInnldoU6rUniuyqzgoypbkJTlC6e9KF1dS5ehlEW/9K5mv/lm4fEyjvVHU7jpx3e3teyu29Et1O/PoItaOd/qxtWs8a/Qx2b/AGanCtVnCVJWTVJT3t6cluPectVrwtzXQs75iNyw7ItMxH92Tg6klU1qOcZPej3eDf5XLnpYyrE93lhfXbxDr4cF5I2GolASAAAAAACAIbJgYGZJOOvLgynqMNctdSyrbUuUxGbUYNqUt1rrGT+iPMZojHftltxuY20+YbXUoX3Kdas+lOn+smicdJv41+/w2Tw09TaXHVdKOAcU/wA1eql/6xT+puU6GZ82/SP+6VTdhYvA5zXT79KjflTptv4ybNvF6fjieYmfxn/iubvWNisqjgsDhsNHjTpR3379WXenN+cmzqxHCtvkxoVXIC4FupUsSyrG5eOe0HM1VxFaknfs3SbV+sX+xxesj7cz8/6e2/h7FFZmffUf7002V4lWSfLQ1azrh2+oxTvcN1TroviXOtSVU6qJmURSWNXqJmFphdSsuex81v6epr+ZdTDWe3lzm0WFqSnCdKDnpJSsr210+rOj0PNZiXm/4gi9L470+Jify1r/ADLJ2bz+vhN5PCynGVt52aaXg2jb+nEOBkz2vEbq7XL9tsHJvtYToN2VqkJpNdG1ddRwqnbpcszShUSdOvCbW8t6M1Ju70T8DKNMLbZUKEe4pJVN1Sbc56a/22tzHbHux7p9lWHw1Jdl3ZKcJJxjebUNGtE9LJPQRWETaW8yqgt/lu711ZFta8qL24dJFlmlKpECQAAAAAAQBDRIs16KkrDyNVWyKnJ3cV8Cm3T0t5hlF5gp5DSX5V8Ca4KV8QibTLLp5bBcIr4FsREIVvCxXIkWI1d125AX4YpAVfakBRPGBLTZ1m6pwlJvdXV9eSXVmNp1DYw03LzPNsm7RVcVC7qztKa470Vy9Ec7qMHdTceYei9I62MPU6vxFuP08f8APzc1Co4u6OZ5e4msWjlnUMx9BuYat+nZH9RXUnvlX/LSxcRmDfAjmV1OniPLC3m31bGtNnURD0bYXZ5di51FeVSV1dcIpWX6nY6DH20m0+7wf8RdZGTPFK+Kx/ef3DrP9N0n+VfA3nnPqSxMXsbQmtYJ+iMZpEpjNaPdz2O9mdCTvGG6+sbxfyMJw1Zx1E+7Wy2KxlH/AGMVVivdm+0T9JXMZwz7Sz+vWfMMilluatpSrQta28qWtvV2H07/ACxnJj+HabOZZUpJdpNzlzcv5oXVjUaa9rbl08ESxVoxEgAAAAAAgABDJgQSAACmaA0ea0Zq84O0l6p+DRI0VTabs3atQqR/upWmvOzaa+ZG9MorvwoltrhFzq36KhV/axHfDKMVpYlfa+U9MPhpyb4Tr2pxXjZXb+RjN59oW1wx/wCpa+OS4nFTVXETcmvwxS3YQ/xj+vEw+nNp3ZtRmpjjVYdBTyVxgZ9qn6u5cFtXlcaMt7hd62TsvFnM6npdT3Veu9J9Wma9mX293OWT1TTXVO5oTExxL0tMsXjdZ3Buhn3JVMIm7Y5BQjWrKEPvGn3t3WMfN9fA2cHTza32nI6/1KmOkxSeXteR4TchFdEdusajT57nv3WmZbmMSWundCEOCApdFAFRQFUYAXEiBJAkAAAAAAEAAAEWJ2FiBIEWAtzppmWxg4jKoT4xROxif6co3/CvgNp3LIo5NTjwihs3LLhhYrgiDaZUFZg25/ONnY1k01e5jasS3MPUzjnh59mnstbk5UZypt+6zXt07pU9SjzzE/MTprF7NMfeyxNl/imV/wArH/5hsT6vk9stv/n/AI2uX+yaUmniK86i5xvup+hZXp4j4j8Grl9Tm33ptb8Z4/SOHoWQ7K0cJFRpwSt0RfWkV8Odm6u+Ty6KnTsZtSZXLEbQWGwsNiLALALAVEABIAAAAAAIAAAAAAAAMCLE7EEgQJsNiGgKXEkRuIJ2dmgbSogSkEK0YgAAAAAAAAAkAAAAAAEAAAAAAAAAAAAAAARYnYWGwsNhYbEkAAAAAAAAAAASAAAAAACGAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAASAAAAAACGAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAASAA5ZbQV3a0aXeTfCa9OPoBX/AFzEe5S5e/4f3AR/XcR7tJ+k/wBwMjLM6q1K0Kc4wSlFyvFSv+FtcWBvmAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAASAA81AAANps1/wBTDyn/APDA7VgAAAAAAAAAAAAAAAAAAAAkAAAAAAAAAAAAP//Z' class='card-img-top' alt='...'>
<div class='card-body'>
<h5 class='card-title'>". $u->getNom() ."</h5>
<p class='card-text'>". $u->getDescription() ."</p>

</div>
</div>



";




}



?>


</div>





<div class="row text-center mt-5">
    
    <h1 class="text-primary">Latest Docteur</h1>

</div>


<div class="row">



<?php

foreach($tab_d as $u){


echo "

<div class='card p-2 col-3 w-100'>
<img src='https://santebd.org/wp-content/uploads/2018/12/Docteur.png' class='card-img-top' alt='...'>
<div class='card-body'>
<h5 class='card-title'>". $u->getName() ."</h5>
<p class='card-text'>". $u->getSpecialite() ."</p>

</div>
</div>



";




}



?>


</div>







<div class="row text-center mt-5">
    
    <h1 class="text-primary">Latest Actualit??s</h1>

</div>


<div class="row">



<?php

foreach($tab_a as $u){


echo "
<div class='card col-3 p-3'>
  <div class='card-body'>
    <h5 class='card-title'>". $u->getTitre() ."</h5>
   
    <p class='card-text'>". $u->getText() ."</p>
    
  </div>
</div>


";




}



?>


</div>


</div>