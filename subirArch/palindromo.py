def check(word):
	n = len(word)-1
	palindromo = True
	i = 0
	while i < n/2 and palindromo:
		if word[i] != word[n-i]:
			palindromo = False
		i+=1
	return palindromo
print check("anitalavalatina")
