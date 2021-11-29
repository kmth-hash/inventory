import random#random imported to find a random integer 

#tuple initialized
tuples = tuple()

#iterate through the range from 0 to 9 (excluding 10)
for i in range(10):
    #append new value into tuple
    # random.randInt(a,b) returns a random integer within the range of a and b
    # New tuple can be appended to tuple using : tuple1 = tuple1 + tuple2
    
    tuples += ( int(random.randint(-100, 100)) , )

#intialize sum to 0
sum = 0
print("Tuple of randome elements : \n" ,tuples)
for i in tuples:#iterate through each tuples
    sum += int(i)#add each value to sum
print("Sum of all values : \n" , sum)#print the total sum of elements

#list() method converts data into a list
newList = list(tuples)
# Print the list 
print("Tuple converted to list : \n" ,newList)


#Find the max element and replace it with the index of that element
maxElement = max(newList)#max() methos takes list as input and returns the maximum element
maxIndex = newList.index(maxElement)
#print the value
print(f"Max element {maxElement} at index {maxIndex}")
#index() method returns the index of given element from list
newList[newList.index(maxElement)] = maxIndex
#print the new list after replacing max element with its index value
print("New list after replacing max element : \n" ,newList)

#sort all elements in list
newList.sort()#sort() method sorts all values in the list
print("Sorted elements in ascending order : \n" ,newList)

#sort elements in reverse method
newList.sort(reverse=True)#sort method with parameter reverse = True , returns the descendingly sorted list
print("Sorted elements in descending order : \n",newList)

#find and remove the first occurence of lowest element in the list
minElement = min(newList)# find minimum value from the list
print("minimum element : ",minElement)
newList.remove(minElement)#remove() method removes the element from the list
#print the new list
print("List after removing minimum element : \n",newList)

#extend name and surname to list
name = "Joe"
surname = "Adam"
# extend method adds new list to given list
# In this case , a list of name and surname is added into the newList at the end
newList.extend([name , surname])
print("Add name and surname to the list : \n",newList)

#to find the count of certain element in the list count() method is used
print("Counter for element 5 : ",newList.count(5))