const btnSwitch = document.querySelector('#switch');
const elmSwitch = document.querySelector('#switch-element')
btnSwitch.addEventListener('click',()=>
{
	document.body.classList.toggle('dark');
	btnSwitch.classList.toggle('active');
	elmSwitch.classList.toggle('active');

	if (document.body.classList.contains('dark'))
	{
		localStorage.setItem('window-mode','dark');
	}
	else
	{
		localStorage.setItem('window-mode','light');	
	}
});

if(localStorage.getItem('window-mode') === 'dark')
{
	document.body.classList.add('dark');
	btnSwitch.classList.add('active');
	elmSwitch.classList.add('active');
}
else
{
	document.body.classList.remove('dark');
	btnSwitch.classList.remove('active');
	elmSwitch.classList.remove('active');
}