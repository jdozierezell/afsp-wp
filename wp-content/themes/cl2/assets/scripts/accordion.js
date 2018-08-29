const headers = document.getElementsByClassName('multi-header')
const icons = document.getElementsByClassName('multi-header__icon')
const sections = document.getElementsByClassName('multi-section')
const toc = document.getElementsByClassName('toc-link')
if (sections.length === 1) {
	// do nothing
} else {
	for (i = 0; i < sections.length; i += 1) {
		sections[i].style.height = 0
		sections[i].style.overflow = 'hidden'
	}
	if (window.location.hash) {
		const windowAnchor = window.location.hash
		const windowNumber = windowAnchor.split('-')[1]
		const windowHeader = document.getElementById('header-' + windowNumber)
		const windowIcon = windowHeader.previousElementSibling
		const windowSection = document.getElementById('section-' + windowNumber)
		const windowHeight = windowSection.scrollHeight
		windowHeader.classList.add('active-header')
		windowIcon.classList.add('active-header__icon')
		windowSection.style.height = windowHeight + 'px'
		window.location = windowAnchor
	}
	for (i = 0; i < toc.length; i += 1) {
		toc[i].addEventListener('click', function(e) {
			e.preventDefault()
			const tocAnchor = e.target
			const tocLink = tocAnchor.href
			const tocNumber = tocAnchor.id.split('-')[2]
			const tocHeader = document.getElementById('header-' + tocNumber)
			const tocIcon = tocHeader.previousElementSibling
			const tocSection = document.getElementById('section-' + tocNumber)
			const tocHeight = tocSection.scrollHeight
			console.log(tocHeight)
			if (tocHeader.classList.contains('active-header')) {
				// chill, it's already active
			} else {
				tocHeader.classList.add('active-header')
				tocIcon.classList.add('active-header__icon')
				tocSection.style.height = tocHeight + 'px'
			}
			window.location = tocLink
		})
	}
	for (i = 0; i < headers.length; i += 1) {
		headers[i].addEventListener('click', function(e) {
			const header = e.target
			const icon = header.previousElementSibling
			const number = header.id.split('-')[1]
			const section = sections[number]
			const height = section.scrollHeight
			if (header.classList.contains('active-header')) {
				header.classList.remove('active-header')
				icon.classList.remove('active-header__icon')
				section.style.height = 0
			} else {
				header.classList.add('active-header')
				icon.classList.add('active-header__icon')
				section.style.height = height + 'px'
			}
		})
	}
	for (i = 0; i < icons.length; i += 1) {
		icons[i].addEventListener('click', function(e) {
			const icon = e.target
			const header = icon.nextElementSibling
			const number = header.id.split('-')[1]
			const section = sections[number]
			const height = section.scrollHeight
			if (header.classList.contains('active-header')) {
				header.classList.remove('active-header')
				icon.classList.remove('active-header__icon')
				section.style.height = 0
			} else {
				header.classList.add('active-header')
				icon.classList.add('active-header__icon')
				section.style.height = height + 'px'
			}
		})
	}
}
