document.getElementById('publier').addEventListener('click',function()
{
document.querySelector('.pub').style.display= 'flex';
});


document.getElementById('X').addEventListener('click',function()
{
document.querySelector('.pub').style.display= 'none';
document.querySelector('.com').style.display= 'none';
});
document.getElementById('commenter-btn').addEventListener('click',function()
{
document.querySelector('.com').style.display= 'flex';
});
