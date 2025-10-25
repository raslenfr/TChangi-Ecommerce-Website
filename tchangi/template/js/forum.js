document.getElementById('publier').addEventListener('click',function()
{
document.querySelector('.pub').style.display= 'flex';
});


document.getElementById('X').addEventListener('click',function()
{
document.querySelector('.pub').style.display= 'none';

});
document.getElementById('X1').addEventListener('click',function()
{
    document.querySelector('.com').style.display= 'none';

});

document.getElementById('commenter-btn').addEventListener('click',function()
{
document.querySelector('.com').style.display= 'flex';
});

document.getElementById('retourner-btn').addEventListener('click',function()
{
document.querySelector('.publication').style.display= 'flex';
document.querySelector('.voir-card').style.display= 'none';

});

document.getElementById('voir-plus').addEventListener('click',function()
{
document.querySelector('.voir-card').style.display= 'block';
document.querySelector('.publication').style.display= 'none';

});