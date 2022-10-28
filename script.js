let cond = 0;

function Bar() 
{
    
    if (cond == 0) 
    {
        document.getElementById('navIcon').src='./img/cross.svg';
        document.getElementById('bar').style=' ';
        cond++;
    }else {
        document.getElementById('navIcon').src='./img/NavBar.svg';
        document.getElementById('bar').style='visibility: hidden;';
        cond--;
    }
};

