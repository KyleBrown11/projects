var video = document.getElementById("video");
var SDS1source = document.getElementById("source");
var defaultimage = document.getElementById("defaultimage");
function playVidSDS1() {
	SDS1source.setAttribute('src','videos/Bocage-DS1.mp4');
	video.setAttribute('width','100%');
	video.removeAttribute('hidden');
	video.load();
	video.play();
	document.getElementById("Strategies").innerHTML = "Defence Setup #1";
	defaultimage.style.display = 'none';
}




var video = document.getElementById("video");
var SDS2source = document.getElementById("source");
var defaultimage = document.getElementById("defaultimage");
function playVidSDS2() {
	SDS2source.setAttribute('src','videos/Bocage-DS1.mp4');
	video.setAttribute('width','100%');
	video.load();
	video.play();
	document.getElementById("Strategies").innerHTML = "Defence Setup #2";
	defaultimage.style.display = 'none';
}
